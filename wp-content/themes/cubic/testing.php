<?php

require_once("../../../wp-load.php");


function add_data( $Land, $Zipcode, $City, $Store, $Phone, $Mail, $Website )
{
global $data;
 
$data = array(
'Land' => $Land,
'Zipcode' => $Zipcode,
'City' => $City,
'Store' => $Store,
'Phone' => $Phone,
'Mail' => $Mail,
'Website' => $Website 
);
return $data;
}
 
if ( $_FILES['file']['tmp_name'] )
{
$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
$rows = $dom->getElementsByTagName( 'Row' );
$Land_row = true;
foreach ($rows as $row)
{
if ( !$Land_row )
{
$Land = "";
$Zipcode = "";
$City = "";
$Store = "";
$Phone = "";
$Mail = "";
$Website = "";

$index = 1;
$cells = $row->getElementsByTagName( 'Cell' );
foreach( $cells as $cell )
{ 
$ind = $cell->getAttribute( 'Index' );
if ( $ind != null ) $index = $ind;
 
if ( $index == 1 ) $Land = $cell->nodeValue;
if ( $index == 2 ) $Zipcode = $cell->nodeValue;
if ( $index == 3 ) $City = $cell->nodeValue;
if ( $index == 4 ) $Store = $cell->nodeValue;
if ( $index == 5 ) $Phone = $cell->nodeValue;
if ( $index == 6 ) $Mail = $cell->nodeValue;
if ( $index == 7 ) $Website = $cell->nodeValue;
 
$index += 1;
}
$result[] = add_data( $Land, $Zipcode, $City, $Store, $Phone, $Mail, $Website );
}
$Land_row = false;
}
}

foreach ($result as $value) {
    $store = $value['Store'];
    $Land = $value['Land'];
    $Zipcode = $value['Zipcode'];
    $City = $value['City'];
    $Phone = $value['Phone'];
    $Mail = $value['Mail'];
    $Website = $value['Website'];
    $my_post = array(
    'post_title' => "$store",
    'post_date' => date('Y-m-d'),
    'post_content' => 'This is my post.',
    'post_status' => 'publish',
    'post_type' => 'retailerpost',
    );
    $the_post_id = wp_insert_post( $my_post );
    $order_ids[] = $the_post_id;
    update_post_meta( $the_post_id, 'country', $Land );
    update_post_meta( $the_post_id, 'zip_code', $Zipcode );
    update_post_meta( $the_post_id, 'phone_number', "$Phone" );
    update_post_meta( $the_post_id, 'city', "$City" );
    update_post_meta( $the_post_id, 'email_id', "$Mail" );
    update_post_meta( $the_post_id, 'website', "$Website" );


}

if(!empty($order_ids)){
    wp_redirect( admin_url().'admin.php?page=excel_import%2Fexcelupload.php&testpostimport=1');
}
else{
     wp_redirect(admin_url().'admin.php?page=excel_import%2Fexcelupload.php&testpostimport=0');
}

?>



