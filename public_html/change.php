<?php  require_once('connect.php');  require('header.php'); ?>  
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

<div>
<?php      
if(isset($_POST['log'])){
    
    
 $cc=$_POST['cc']; $em=$_POST['em']; $pass=$_POST['p'];
  $query="SELECT * FROM users WHERE password='$cc' AND username='$em' ";
$result=$conn->query($query);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
	$idholder= $row["id"];
$sql="UPDATE `users`  SET 
`password` = '$pass'
 WHERE `id`=$idholder";
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success alert-dismissible'>
Password Reset Successful, <a href='login.php'>login</a>
</div>";
} else{ 
    
echo "<div class='alert alert-warning alert-dismissible'>
error occured,system could not reset password,try again.....
</div>";   
    
}
    
    
}} else{ 
    
   echo "<div class='alert alert-danger alert-dismissible'>
oops, this link is broken... <a href='recover.php'>Signup</a>
</div>";
}
    
    
    
    
    
}





?>

<?php  $cc=$_GET['cc']; $em=$_GET['em']; ?>
<div class="container">
  <form action="" method='post'>
    <label for="username">Enter New Password</label>
    <input type="text" id="username" onkeydown="javascript:stripspaces(this)" title="Enter password" value="" name="p" placeholder="Enter new password" required >
    <input type="text" id="cc"  value="<?php  echo $_GET['cc']; ?>" name="cc" hidden >
    <input type="text" id="em"  value="<?php  echo $_GET['em']; ?>" name="em" hidden >
  <input type="submit" name="log" value="Change">
  </form>
</div>
						</div>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
		
			
	
	
        <!--Footer-->
       <?php  require('footer.php'); ?>