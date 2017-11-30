<?php require('connect.php'); 
$query="SELECT * FROM settings WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["pubkey"]; 
 $se2= $row["prikey"]; 
  $se3= $row["min"];
  $se4= $row["max"];
  $se5= $row["merchant"]; 
  $se6= $row["skey"]; $se7= $row["auto"];  $se8= $row["manual"]; $se9= $row["ltc"]; $se10= $row["eth"];
}}
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAGNA EXCHANGE | BUY AND SELL BITCOIN</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="js/modernizr.custom.js"></script>
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
</head>

<body>

    <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    <!-- HHHHHHHHHHHHHHHHHH        Preloader          HHHHHHHHHHHHHHHH -->
    <!-- <div id="preloader"></div> -->
    <!-- HHHHHHHHHHHHHHHHHH        Header          HHHHHHHHHHHHHHHH -->
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                        <div class="row">
                            <div class="col-md-11 col-xs-10">
                                <a href="index.php"><span id="logo"><strong class="strong">MAGNA</strong><i class="fa fa-exchange"></i></span></a>
                            </div>
                            <div class="col-md-1 col-xs-2">
                                <p class="nav-button">
                                    <button id="trigger-overlay" type="button">
                                    <i class="fa fa-bars"></i>
                                    </button>
                                </p>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.navigation -->
                </div><!--/.container-->
            </div><!--/.top-bar-->

        <div class="container">
            <div class="starting">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/LUCY2.png" alt="LUCY" class="wow flipInY animated animated">
                    </div>
                    <div class="col-md-6">
                        <div class="banner-text">
                             <h2 class="animation-box wow bounceIn animated"><strong class="strong">EXCHANGE CRYPTO'S</strong><br>
                            Btc,Ltc,Eth</h2>
                            <p>
                                 The easiest way to buy digital currency. Buy Bitcoins, Ethereum and Litecoins with your Credit Card or PayPal here! Register to Magna Exchange and get your Bitcoins today</p>
                            <a href="signup.php" class="btn btn-download " style='background:green; color:white;' >
                            <i class="fa fa-user pull-left"></i>
                            <strong>SIGNUP </strong>
                            </a>
                            <a href="signup.php" class="btn btn-download " style='background:orange;'>
                            <i class="fa fa-sign-in pull-left"></i>
                            <strong>LOGIN</strong>
                            </a>    
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
            </div>
            <!-- /.starting -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#header -->