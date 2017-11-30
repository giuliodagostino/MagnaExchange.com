<?php require_once('../connect.php');
$fn=$_SESSION['u2']; // Fetching Values from URL
$ip=$_POST['email1'];
$txt=$_POST['msg1'];
$date=date('Y-m-d h:i:s a');
$sql="INSERT INTO xtra(username,name,date,misc) 
VALUES('$fn','$txt','$ip','$date')";

if($conn->query($sql)==TRUE){
 echo " posted>";
} else{

echo "oops!! 
Something went wrong, pls retry or <br> , 
Continue to <a href='index.php'>dashboard</a>
";
}

?>