<?php  require_once('connect.php');
if(empty($_COOKIE['username']))
{ } else{ } 
if(isset($_POST['send'])) {
$a=htmlspecialchars($_POST["myusername"]);
$b=$_POST["mypasswor"];	 
$myusername=stripslashes($a);
$mypassword=md5($b);
setcookie('username', $_POST['myusername'], time()+60*60*24*30, '/');
setcookie('password',$_POST['mypasswor'], time()+60*60*24*30, '/');
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
   echo "<div class='alert alert-danger'> Incorrect Inputs - Try again !!!</div>";
  } } 
 
require('header2.php');  
 ?>				
	<div class="banner">

	  <center><div class="col-md-8 col-sm-8" style='margin-left:auto; margin-right:auto; background:linen;'>
       
	      <form name="" id="contact_form"  >
	       <h3> <i class="fa fa-user" ></i> CREATE ACCOUNT</h3>
		 <div class="control-group">
                    <div class="controls">
<input class="form-control"  type="text" style="height:80px;" placeholder="Username" id="name" name="name"  required="">
	<br><div class="clearfix"></div>
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
						<center><i style='font-size:50px; color:black;' 
						class='fa fa-refresh fa-spin' id='spi'></i></center>
						</div>
<button type="button" id="submit" style="height:40px;" class="btn btn-primary pull-right"> <i class="fa fa-folder" ></i> Signup</button><br />

</div>
					</form>	
</div></center><div class="clearfix"></div></div>
	<hr>

<?php include('footer.php');  ?>