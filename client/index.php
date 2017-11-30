<?php require_once('../connect.php');
$client=$_SESSION['u2']; 
if(!isset($client)){ header('location:logout.php'); }
$query="SELECT * FROM users WHERE username='$client'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$fn= $row["username"]; 
 $em= $row["email"];  $walle= $row["ltc"]; $wal= $row["eth"];
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
  $se6= $row["skey"]; $se7= $row["auto"];  $se8= $row["manual"]; $se9= $row["ltc"]; $se10= $row["eth"];
}} else
{}
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $_SESSION['u2'];  ?>'s Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

   
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
<style type="text/css" media="screen">
.barcode { font-family: "bar code", verdana, calibri; font-size: 48pt; }
</style>
   
<style>
    
    
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}    
    
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="index.php" class="simple-text">
					<i class="fa fa-exchange"></i> MagnaExchange
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="index.php">
	                        
	                        <p><i class="fa fa-user alert-success"></i>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?profile">
	                        <i class="fa fa-user"></i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?coins">
	                        <i class="fa fa-paste"></i>
	                        <p>Exchanges</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?security">
	                        <i class="fa fa-gear"></i>
	                        <p>Security</p>
	                    </a>
	                </li>
	           
	                
	                <li>
	                    <a href="?buy">
	                        <i class="fa fa-exchange"></i>
	                        <p>Buy</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?sell">
	                        <i class="fa fa-shopping-cart"></i>
	                        <p>Sell</p>
	                    </a>
	                </li>
	                 <li>
	                    <a href="?order">
	                        <i class="fa fa-truck"></i>
	                        <p>My Orders</p>
	                    </a>
	                </li>
	               <li>
	                    <a href="?history">
	                        <i class="fa fa-folder"></i>
	                        <p>Logs</p>
	                    </a>
	                </li>
	               <li>
	                    <a href="logout.php">
	                        <i class="fa fa-lock"></i>
	                        <p>Logout</p>
	                    </a>
	                </li>
	                
	                
	                
					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php if($verify=='N'){ 
echo "<span class='btn btn-danger 
btn-fill btn-wd'><i class='fa fa-times fa-fw'></i> UnVerified - <a href='../resend.php?uid=$em' style='color:green;'>Resend Code</a></span>";

} else{
echo "<span class='alert alert-info 
btn-fill btn-wd' style='background:green;'><i  class='fa fa-lock'></i> Account Verified</span>";
} ?>	
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
					
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

					
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
			
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
				else if(isset($_GET['sell'])){
include('sell.php');
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
				else if(isset($_GET['req'])){
include('request.php');
			}
				else if(isset($_GET['sellnow'])){
include('sellnow.php');
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
			else if(isset($_GET['seller'])){
include('seller.php');
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
?>
					
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="index.php">
									Home
								</a>
							</li>
							<li>
								<a href="?security">
									Security
								</a>
							</li>
							<li>
								<a href="?profile">
									Profile
								</a>
							</li>
							<li>
								<a href="logout.php">
								  Logout(<?php echo $client; ?> )							</a>
							</li>
						</ul>
					</nav>
					
				</div>
			</footer>
		</div>
	</div>
<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	
	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

</body>
</html>
