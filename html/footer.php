<footer class="container-fluid">
    <div class="container nopadding">
        <div class="row">
            <div class="col-sm-4">
                <h2>About</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac ante at mauris euismod viverra id in nulla. 
                    Aliquam fermentum enim vel nulla aliquam.
                </p>     
                <div class="socialMedia">
                    <ul class="nopadding">
                        <li><a href="#"><img src="images/pinterest-icon.png" alt="img"></a></li>
                        <li><a href="#"><img src="images/fb-icon.png" alt="img"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png" alt="img"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-5 col-md-4 col-md-offset-1">
                <h2 class="text-center">&nbsp;</h2>
                <ul class="text-center nopadding">
                    <li class="text-left"><img src="images/phone-icon-white.png" />&nbsp;&nbsp; <a href="tel:0000-12 34 567">0000-12 34 567</a></li>                    
                    <li class="text-left"><img src="images/email-white-icon.png" />&nbsp;&nbsp; <a href="mailto:mail@fargform.com">mail@fargform.com</a></li>                    
                    <li class="text-left"><img src="images/home-white-icon.png" />&nbsp;&nbsp; Gatan 3000, 7099 Orebro, Sweden</li>
                </ul>
            </div>

            <div class="col-sm-3">
                <h2 class="text-right">sitemap</h2>                           
                <ul class="text-right">
                    <li><a href="index.php">home</a></li>
                    <li><a href="products.php">products</a></li>
                    <li><a href="designers.php">designers</a></li>                    
                    <li><a href="retails.php">retails</a></li>  
                    <li><a href="press.php">press</a></li>  
                </ul>

            </div>           
        </div>
        <div class="row copyright">
            <div class="col-sm-12">
                <p class="text-center"><span class="createdBy">Created by</span>&nbsp; <span class="other">8190 Design</span></p>
                <p class="text-center">copyright &copy; Farg och Form</p>
            </div>          
        </div>

    </div>
</footer>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        
        $(".navbar-toggle").click(function () {
            $(".navigation .navigationBar").toggleClass("active");
        });
        
        $('#myAffix').affix({
            offset: {
                top: 100
            }
        });
        
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    });
</script>

</body>
</html>