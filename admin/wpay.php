<?php
require('../connect.php');
$client=$_SESSION['u2'];
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$accid=$_POST['accid']; 
$sql="UPDATE `account`  SET 
`request` = '0',`te` = '1',`paypal` = '0'
  WHERE `id`=$accid";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql2="INSERT INTO logs(username,name,date,misc) VALUES('$refn','Your Exchange was approved and we have sent you our ICO in exchange','$ip','$date')";
if($conn->query($sql2)==TRUE){
    header('location:index.php?w');
	} 
} else { echo "Error occured!! <a href='index.php?w'>Retry</a>" ; }
}}
?>