<?php require_once('../connect.php'); $client=$_SESSION['u2'];
$query="SELECT * FROM admin WHERE username='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id=$_GET['id']; $co=$_GET['coin']; $ba=$_GET['bal']; $bt2=$_GET['bt'];

  $bt2=$bt+$ba;
  
$sql="UPDATE `account`  SET 
`withdrawal` = '$bt2',`request` = 0
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','$bt $curr withdawal of $ba $co was confirmed by Admin','$ip','$date')";
if($conn->query($sql)==TRUE){
    header('Refresh: 4; url=index.php?w');
    echo "Credit Successful .... redirecting ";
    
	} } 
    
    
    
    
}} else{  echo 'This link has expired'; }
?>