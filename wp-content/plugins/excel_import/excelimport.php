<?php
$data = array();
@import 'http://localhost/excelimporter/wp-load.php';
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
print_r($result);
foreach ($result as  $value) {
	echo $date = date('Y-m-d');
    $my_post = array(
	    'post_title' => $value['Store'],
	    'post_date' => $date,
	    'post_content' => 'This is my post.',
	    'post_status' => 'publish',
	    'post_type' => 'retailerpost'
	);
    echo $pid = wp_insert_post($my_post);
}


?>
