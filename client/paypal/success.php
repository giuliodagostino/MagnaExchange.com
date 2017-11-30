<?php
// Database variables
$servername="localhost";
$username="magnaex";
$password="w@aA5X$7BDhCrW";
$dbname="magnaex";
$conn=new MySQLi($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("error");
}



	
// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}
// post back to PayPal system to validate
$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
 
$fp = fsockopen ('https://ipnpb.paypal.com', 443, $errno, $errstr, 30);
 
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email']; 
	$invoice=$data['item_number'];
	$query="SELECT * FROM account WHERE username='$invoice'  LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"]; $ms= $row["ms"];	
}} 
$sql="UPDATE `account`  SET 
`status` = 'P',`te` = '0',`cron` = '0'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('ms','Payment was confirmed - invoice NO. $tv','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
 echo "<div class='alert alert-success'>Payment Confirmed!</div>";
} 

else{ echo "<div class='alert alert-danger'>Error Confirming Payment!</div>";
  }
	$sql="INSERT INTO payments(txnid, payment_amount, payment_status, itemid, createdtime)
 VALUES('".$data['txn_id']."' ,'".$data['payment_amount']."' ,
'".$data['payment_status']."' ,'".$data['item_number']."' , '".date("Y-m-d H:i:s")."')";
if($conn->query($sql)==TRUE){
echo "ok";    
}

 
  
if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {
 mail("giuliodagostino1978@gmail.com", "PAYPAL DEBUGGING", "Invalid Response<br />data = <pre>".print_r($post, true)."</pre>");
// PAYMENT VALIDATED & VERIFIED!
	// assign posted variables to local variables


 
}
 
else if (strcmp ($res, "INVALID") == 0) {
 
// PAYMENT INVALID & INVESTIGATE MANUALY!
 
}
}
fclose ($fp);
}
?>