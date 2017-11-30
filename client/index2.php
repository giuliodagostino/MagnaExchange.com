<?php require_once('../connect.php');
$client=$_SESSION['u2']; 
if(!isset($client)){ header('location:logout.php'); }
$query="SELECT * FROM users WHERE username='$client'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$fn= $row["username"]; 
 $em= $row["email"]; 
  $cid= $row["id"];
  $clientdate= $row["misc"]; 
  $verify= $row["status"]; $regd= $row["misc"];
  $wallet= $row["wallet"]; $_SESSION['wallet']=$wallet;
}} else
{}
$query="SELECT * FROM settings WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["pubkey"]; 
 $se2= $row["prikey"]; 
  $se3= $row["min"];
  $se4= $row["max"];
  $se5= $row["merchant"]; 
  $se6= $row["skey"]; $se7= $row["auto"]; $se8= $row["months"]; 
}} else
{}
	
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $_SESSION['u2'];  ?>'s Dashboard</title>
    <!-- Bootstrap Styles-->
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="../favicon.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<script>
    
    function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
</script>
<script type="text/javascript" src="code39.js"></script>
    <style type="text/css">
  	#barcode {font-weight: normal; font-style: 
	normal; line-height:normal; sans-serif; font-size: 12pt}
	
    </style>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
   
 
    
    <style>
    div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #e01f3d;;
}

/* Style the buttons inside the tab */
div.tab button {
	color:white;
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #09192A;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
  </style> 
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body> <div style="" >
    <div id="wrapper" >
        <nav class="navbar navbar-default top-navbar" role="navigation" >
            <div class="navbar-header" style="background:#e01f3d;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class='fa fa-exchange'></i> Lendconnect</i></a>
           <h4 style='color:yellow;'>Exchange Rate : 1 USD  <i class='fa fa-exchange'></i>
		   <?php echo $se4.$se3; ?></h4>
 </div>
										
            <ul class="nav navbar-top-links navbar-right">
                <h5 style='color:white;'><?php if($verify=='N'){ 
echo "<i class='fa fa-times fa-fw'></i> UnVerified - <a href='../resend.php?uid=$em' style='color:green;'>Resend Code</a>";

} else{
echo "<span class='btn btn-info 
btn-fill btn-wd' style='background:#e01f3d;'><i  class='fa fa-check fa-fw'></i> Account Verified</span>";
} ?></h5>
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-comments fa-fw"></i> <?php
$sqlk="SELECT * FROM support WHERE username='$client' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo "<i class='badge badge-danger'>".$rowcount."</i>";}
  ?> </h3><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                       
                      
                        <li>
                            <a class="text-center" href="?chatroom">
                                <strong>Chatroom</strong>
                                
                            </a>
                        </li>
                        <li>
                            <a class="text-center" href="?support">
                                <strong>Support</strong>
                                
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="?security"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
  </div>
      </div>  
<div id="page-inner" >
<div class="'col-lg-12 col-md-12 col-sm-12" style='color:black;'>
 <div class="tab">
 <a href='index.php'><button class="tablinks" ><i class='fa fa-home'></i> Home</button></a>
 
  <a href='?coins'><button class="tablinks" ><i class='fa fa-exchange'></i> My Exchanges</button></a>
  <a href='?sales'><button class="tablinks" ><i class='fa fa-shopping-cart'></i> Buy</button></a>
  <a href='?coins'><button class="tablinks" ><i class='fa fa-bar-chart'></i>  Statistics</button></a>
  <a href='?profile'><button class="tablinks" ><i class='fa fa-user'></i> Profile</button></a>
  <a href='?security' ><button class="tablinks" ><i class='fa fa-gear'></i>  Security</button></a>
   <a href='?chatroom'><button class="tablinks" ><i class='fa fa-comments'></i> Chatroom</button></a>
   <a href='?order'><button class="tablinks" ><i class='fa fa-truck'></i> My Orders</button></a>
   <a href='logout.php'><button class="tablinks" ><i class='fa fa-sign-out'></i> Logout</button></a>
  
</div><div class='clearfix'></div></div><div class='clearfix'></div>
<div style="">
<hr>
<div  name="fr" style="border:none;  " class='col-lg-8 col-md-8 col-sm-12' >
<div class='alert alert-info' style='background:#09192A; color:lavender;'> <h4><i class='fa fa-users'></i> www.site.com/signup.php?ume=<?php 
echo $client ; ?>   <a href='?sales'><button  type="submit" name="update"
  class="btn btn-warning btn-fill btn-wd" style='background:#e01f3d;'>
  <i
  class='fa fa-exchange' ></i> Buy ico</button></a>   </h4></div>
  <div style='background:#09192A;'>
<?php if(isset($_GET['profile'])){
include('user.php');
			}
else if(isset($_GET['buy'])){
include('buy.php');
			}
			else if(isset($_GET['chatroom'])){
include('chatroom.php');
			}
			
			else if(isset($_GET['transact'])){
include('transact.php');
			}
			else if(isset($_GET['rcheckout'])){
include('rcheckout.php');
			}
			
			else if(isset($_GET['coins'])){
include('coins.php');
			}
			else if(isset($_GET['packages'])){
include('packages.php');
			}
				else if(isset($_GET['callback'])){
include('callback.php');
			}
			
			else if(isset($_GET['referal'])){
include('referal.php');
			}
			else if(isset($_GET['security'])){
include('security.php');
			}
			else if(isset($_GET['testimony'])){
include('testimony.php');
			}
			
			else if(isset($_GET['support'])){
include('support.php');
			}
				else if(isset($_GET['pending'])){
include('pending.php');
			}
			else if(isset($_GET['remove'])){
include('remove.php');
			}
				else if(isset($_GET['topup'])){
include('topup.php');
			}
			else if(isset($_GET['history'])){
include('history.php');
			}
			else if(isset($_GET['checkout'])){
include('withdrawal.php');
			}
			else if(isset($_GET['md'])){
include('md.php');
			}
			else if(isset($_GET['manual'])){
include('manual.php');
			}
			else if(isset($_GET['withdraw'])){
include('withdraw.php');
			}
				else if(isset($_GET['cashout'])){
include('cashout.php');
			}
			else if(isset($_GET['deposits'])){
include('deposits.php');
			}
			else if(isset($_GET['withd'])){
include('withd.php');
			}
				else if(isset($_GET['pend'])){
include('pend.php');
			}
			else if(isset($_GET['calculate'])){
include('calculator.php');
			}
			else if(isset($_GET['order'])){
include('order.php');
			}
			else if(isset($_GET['makepay'])){
include('makepay.php');
			}
				else if(isset($_GET['sales'])){
include('sales.php');
			}
else{
	include('default.php');
 

}
include('sales.php');
 include('coins.php');?>	</div></div></div>
<div style="border:none; "  class='col-lg-4 col-md-4 col-sm-12'><?php include('calculator.php'); ?>
 </div>


</div>
<div><footer style="background:#09192A; padding-bottom:0px; height:20%; color:white;"><center>
				<p> Exchanger Crypto Currency Management Website <i class='fa fa-check'></i> Investments
				 - <i class='fa fa-check'></i> Bitcoin Exchange <i class='fa fa-check'></i> Lending
				</p> 
				All right reserved. <i class='fa fa-home'></i> <a href="">
				Crypto Exchange Company</a> | <i class='fa fa-sign-out'></i> <a href='logout.php'>
				Logout</a>  |
				
				 | <i class='fa fa-money'></i> <a href='?sales'>buy</a></center></footer> </div>
  

 <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "block";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
} 
</script>

</body>

</html>
