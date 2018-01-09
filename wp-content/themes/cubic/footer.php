<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

  <footer>
    <div class="footer_main">

      <div class="logo_footer"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/footer-logo.png" alt="Footer Logo"></a></div>
      
      <p>2170 West County Road 42, Burnsville, MN 55337</p>

      <div class="footer_navigation">
        <ul>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">careers</a></li>
          <li><a href="#">privacy statement</a></li>
          <li><a href="#">terms &amp; conditions</a></li>
        </ul>
      </div>

      <div class="footer_social_icon">
        <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>



    </div>
  </footer>

<?php wp_footer(); ?>




   <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js""></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
  <!-- Costom JS -->


</body>
</html>