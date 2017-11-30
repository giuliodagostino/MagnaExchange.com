<?php
require_once('../connect.php');
$client=$_SESSION['u2'];
$rs=$_GET['ui'];
$query="DELETE FROM account WHERE id='$rs' ";
$result=$conn->query($query);
if($result==TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','You canceled a Transact','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
 header('location:index.php?pending'); 
echo 'Successfully Deleted';
}
?>