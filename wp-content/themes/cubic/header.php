<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        
        
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
        <meta charset="UTF-8">
        <title><?php bloginfo( 'name' ); ?> </title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
         <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.css">
        <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">

        <!-- Owl Items -->    

        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/owl/assets/owlcarousel/assets/owl.carousel.min.css"> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/owl/assets/owlcarousel/assets/owl.theme.default.min.css">   

        <!-- Yeah i know js should not be in header. Its required for demos.-->

        <!-- javascript -->
        <script src="<?php echo get_template_directory_uri();?>/owl/assets/vendors/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/owl/assets/owlcarousel/owl.carousel.js"></script>  
        
</head>

<body <?php body_class(); ?>>
   
  <header>
    <div class="header">

      <div class="header_content">
      
        <div class="main_logo">
          <a href="index.html"><img src="<?php echo get_field('logo', 'options'); ?>" alt="Main Logo"></a>
        </div>          

        
          <div class="main_menu">
            <ul>
              <li><a href="solutions-home-recovered.html">solutions</a></li>

              <li><a href="system-homes.html">systems</a>
                  <ul class="sub_drop">
                    <li><a href="#">systemstrax</a></li>
                    <li><a href="#">systemstrax</a></li>
                    <li><a href="#">systemstrax</a></li>
                  </ul>

              </li>

              <li><a href="specification-home.html">specifications</a></li>
              <li><a href="about-home.html">about</a>
                  
                  <ul class="sub_drop">
                    <li><a href="#">systemstrax</a></li>
                    <li><a href="#">systemstrax</a></li>
                    <li><a href="#">systemstrax</a></li>
                  </ul>

              </li>
              <li><a href="contact-us.html">contact</a></li>
            </ul>
          </div>  

        </div>     
        
     </div>
  </header>