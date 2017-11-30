<?php 
require_once('../connect.php'); 
$client=$_SESSION['u2'];
$tv=$_SESSION['tv'];
 $query="SELECT * FROM account WHERE username='$tv' AND misc='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"];	
}} 
$sql="UPDATE `account`  SET 
`status` = 'P'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','Payment was confirmed','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
    unset($_SESSION['tv']);
    $_SESSION['tv']='';
    header('Refresh: ; url=index.php');
 echo "<div class='alert alert-success'>Payment Confirmed, redirecting.....</div>";
} 

else{ echo "<div class='alert alert-danger'>Error Occured !</div>";
  }    

?>