<?php  require_once('connect.php');
if(isset($_POST['send'])) {
$a=htmlspecialchars($_POST["myusername"]);
$b=$_POST["mypassword"];	 
$myusername=stripslashes($a);
$mypassword=md5($b);
setcookie('username', $_POST['myusername'], time()+60*60*24*30, '/');
setcookie('password',$_POST['mypassword'], time()+60*60*24*30, '/');
$query="SELECT * FROM users WHERE username='$myusername' AND password='$b'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$u2=$row["username"];
$_SESSION["u2"]=$u2;
unset($_SESSION['ilog2']);
$_SESSION['ilog']=1;
header('location:client/index.php');
}} else{
echo "Login Details incorrect!";
    $_SESSION['ilog2']=2;
    unset($_SESSION['ilog']);
  } } 
 
require('header2.php');  
 ?>	
 
	<div class="banner1">
</div>
<div class="about-breadcrumb">
	<div class="container">
		
	</div>
</div>

	<div class="col-md-6 col-sm-12">
          <form method="post" id=""  >
	       <h3><i class="fa fa-lock" ></i> Sign In To Account</h3>
		 <div class="control-group">
              <div class="key">
								<input  style="height:80px;" type="text" name="myusername"
								value="<?php if(isset($_COOKIE['username']) 
									&& isset($_COOKIE['password'])) 
									{ echo  $_COOKIE['username']; }  ?>" onfocus="this.value = '';" 
									onblur="if (this.value == '') {this.value = 'Username';}" class="form-control"  required="">
								<div class="clearfix"></div><br>
							</div>
							<div class="key">
								
								<input  style="height:80px;" type="password" name="mypassword"
								 value="<?php if(isset($_COOKIE['username']) 
									&& isset($_COOKIE['password'])) { echo  $_COOKIE['password']; } 
								?>"   
								onfocus="this.value = '';"   class="form-control" required="">
								<div class="clearfix"></div>
							</div>
			  
<button style="height:40px;" type="submit" name="send" submit="send" class="btn btn-primary pull-right"> <i class="fa fa-lock"></i> Login</button><br />
<p><a href="recover.php"> Forgot Password? </a></p>
</div>
					</form>
</div>
	  <div class="col-md-6 col-sm-12">
          <form name="" id="contact_form"  >
	       <h3> <i class="fa fa-folder" ></i> Create Account</h3>
		 <div class="control-group">
                    <div class="controls">
<input class="form-control"  type="text" placeholder="Username" id="name" name="name"  required="">
	<div class="clearfix"></div>
						</div>
						<div class="key">
											<input  type="text" id="email" class="form-control" placeholder="Email" name="email"  required="" style="height:80px;"><br>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="passwor" id="passwor" placeholder="Password" 
class="form-control" name="Passwor"   required="" style="height:80px;"> <br>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input class="form-control"  type="passwor2" id="passwor2" placeholder="Confirm Password" name="Confirm Password"  required="" style="height:80px;"><br>
							<div class="clearfix"></div>
						</div>
						
						<?php if(isset($_GET['ume'])){ $ref= $_GET['ume']; 
								echo "<input type='text' value='$ref' class='form-control' name='ref' id='ref' placeholder='Referal' readonly  required >"; }  ?>
								<br>
									<div class="key">
									   
<input type="text" class="form-control" id='wallet' name="wallet" placeholder="Wallet Address -btc" required="" style="height:80px;"><br>
						<center><i style='font-size:40px; color:black;' 
						class='fa fa-refresh fa-spin' id='spi'></i></center>
						</div>
<button type="button" id="submit" style="height:40px;" class="btn btn-primary pull-right"> <i class="fa fa-folder" ></i> Signup</button><br />

</div>
					</form>
</div>
		
<div class="clearfix"></div>		


<?php include('footer.php');  ?>