
<?php  require('header.php');  require('connect.php');  ?>


<br><br><br>	<form  method="post" action='password.php' >
								<input type="text" name="myusername" value="" placeholder='Enter Email linked to account' required="">
								<input type="text" name="u" value="" placeholder='Enter username' required="">
								
									<br>
							<input type="submit" name="send" value="Reset">
								</div>
							</form>
							<?php  require('footer.php'); ?>