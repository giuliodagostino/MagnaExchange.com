<?php require_once('connect.php');
if(empty($_COOKIE['username']))
{ } else{ } 
if(isset($_POST['send'])) {
$a=htmlspecialchars($_POST["myusername"]);
$b=$_POST["mypasswor"];	 
$myusername=stripslashes($a);
$mypassword=md5($b);
$query="SELECT * FROM admin WHERE username='$myusername' AND password='$b'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$u2=$row["username"];
$_SESSION["u2"]=$u2;
unset($_SESSION['ilog2']);
$_SESSION['ilog']=1;
header('location:admin/index.php');
}} else{
    $_SESSION['ilog2']=2;
    unset($_SESSION['ilog']);
  } } 
 require('header.php'); 
 ?>
    <style>
input[type=text], input[type=password], input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: none; border-bottom:3px solid #000050; background:;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #000050;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #000050;
}


</style>
<script>function stripspaces(input)
{
  input.value = input.value.replace(/\s/gi,"");
  return true;
}

</script>
        <!--Home page style-->
        
        <!-- Sections -->

        <section id="portfolio-area" class="sections">
      <div class="container">
                <!-- Example row of columns -->
                <div class="row" style="background:white;">
					
					
					<div class="col-sm-12 col-sm-12 col-xs-12">

<div><?php if(isset($_SESSION['ilog'])){
echo "<div class='alert alert-success alert-dismissible'>
login successful, system redirecting.....<a href='client/index.php'>dashboard</a>
</div>";
} ?>
<?php if(isset($_SESSION['ilog2'])){
echo "<h6 style='background-color:;' class='alert alert-warning'><center>Incorrect username 
or password,please <a href='login.php'>retry </a></center></h6>";
} 

?>
</div>

<br><br>

			<div class="modal-content">
				<div class="modal-header">
					
					<div class="signin-form profile">
						<h3 class="agileinfo_sign"><i class='fa fa-user'></i> ADMINISTRATOR</h3>
						<div class="login-form">
							<form  method="post" >
								<input type="text" name="myusername" value="" placeholder='Enter Admin Username' required="">
								<input type="password" name="mypasswor" value="Password"  placeholder='Enter Password' required="">
								<div class="tp">
									<input type="submit" name="send" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-user"></i></a></li>
								
							</ul>
						</div>
						<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>			</div>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
      
		
			
	
	
        <!--Footer-->
       <?php  require('footer.php'); ?>