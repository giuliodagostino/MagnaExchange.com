 <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

    <section id="footer" class="wrapper">
        <div class="container text-center">
            <div class="footer-logo">
                <h1 class="text-center animation-box wow bounceIn animated">Magna Exchange</h1>
            </div>
            <ul class="social-icons text-center">
                <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="wow animated fadeInRight googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="wow animated fadeInLeft github"><a href="#"><i class="fa fa-github"></i></a>
            </ul>

            <div class="copyright">
                <div class="credits">
                    Made by <i class="fa fa-exchange"></i>  <a href="http://www.magnaexchange.com" target="_blank">MagnaExchange</a>
                </div>
                <div>©2017-2018 Memetics Ireland LTD., All Rights Reserved</div>
            </div>
        </div><!-- container -->
    </section>




    
    


    <!-- HHHHHHHHHHHHHHHHHH        Open/Close          HHHHHHHHHHHHHHHH -->
    <div class="overlay overlay-hugeinc">
        <button type="button" class="overlay-close">Close</button>
        <nav>
        <ul>
            <li class="hideit"><a href="index.php">HOME</a></li>
<li class="hideit"><a href="about.php">ABOUT</a></li>
            <li class="hideit"><a href="signup.php">SIGNUP</a></li>
            <li class="hideit"><a href="login.php">LOGIN</a></li>
            <li class="hideit"><a href="contact.php">CONTACT US</a></li>

           
        </ul>
        </nav>
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/script.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $(".hideit").click(function(){
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function(){
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){

          var kawa = $('.top-bar');
          var back = $('#back-to-top');
          function scroll() {
             if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

             } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
             }
          }

          document.onscroll = scroll;
        });
    </script>
    <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>

</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a1f20d5198bd56b8c03e1e0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>