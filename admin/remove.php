<?php
require_once('../connect.php');
$client=$_SESSION['u2'];
$rs=$_SESSION['tv'];
$query="DELETE FROM account WHERE username='$rs' ";
$result=$conn->query($query);
if($result==TRUE) {
 header('location:index.php?coins'); 
echo 'Successfully Deleted';
}
?>