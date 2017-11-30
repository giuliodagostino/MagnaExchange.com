<?php  
require_once('../connect.php');
if(isset($_GET['uid'])){
	$uid=$_GET['uid'];
$query="DELETE FROM plans WHERE id='$uid' ";
$result=$conn->query($query);
if($result==TRUE) {
  header('location:plans.php');
 echo "<div class='alert alert-warning'>Package Deleted!</div>";
} 
else{ echo "<div class='alert alert-danger'>Error!</div>";}	
}
else{
	$identity=date('ymd');
$sql="INSERT INTO plans(p1,p2,p3,insurance,identity)
 VALUES('0','0','0','0','$identity')";
if($conn->query($sql)==TRUE){  header('location:plans.php');  
 echo "<div class='alert alert-success'>New Record Added!</div>";
} else{ echo "<div class='alert alert-danger'>Error!</div>". $conn->error;}
}
?> 