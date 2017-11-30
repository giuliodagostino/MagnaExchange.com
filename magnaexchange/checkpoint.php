<?php require_once('connect.php'); 
require('header.php'); ?>

</head>
<body>
<br><br><br>


<div class="container"><br>
  <center></center><br>
  <div><?php 
  $check=$_GET['l'];
  $query="SELECT * FROM users WHERE confirm='$check' ";
$result=$conn->query($query);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
	$idholder= $row["id"];
$sql="UPDATE `users`  SET 
`status` = 'P'
 WHERE `id`=$idholder";
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success alert-dismissible'>
Thanks, Your Email Has Been Successfully Verified, click here to <a href='login.php'>login</a>
</div>";
} else{ 
    
 echo "<div class='alert alert-warning alert-dismissible'>
OOPS!,Email Not Successfully Verified, click here to <a href='login.php'>resend</a>
</div>";   
    
}
    
    
}} else{ 
    
    echo "<div class='alert alert-danger alert-dismissible'>
Sorry, This is an invalid link <a href='index.php'>Signup</a>
</div>";
}
    ?>

</div>
</div>



  <?php  require('footer.php'); ?>

