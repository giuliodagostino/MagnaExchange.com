<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup('341eFF649F49ec8f7524465e40b02E3e3D13d4daC2828710646799FFfEc18bf1', '56770cb4fb7493ffcec67ba19b0aa74e8c6a15320521dbf5fcfdf51f24430d5c');

$ac=$_POST['myid']; $curr=$_POST['curr']; $bt=$_POST['btc']; $wt=$_POST['wt'];
	$result = $cps->CreateWithdrawal($bt, $curr, $wallet);
	if ($result['error'] == 'ok') {
	    require('../connect.php');
$query="SELECT * FROM account WHERE id='$ac' AND misc='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"];	
 
$bt2=$bt+$wt;
$sql="UPDATE `account`  SET 
`withdrawal` = '$bt2'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','$bt $curr withdawal was confirmed','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
    unset($_POST['ac']);
    $_POST['ac']='';
    header('Refresh: 2; url=index.php');
 echo "<div class='alert alert-success'>Payment Confirmed, redirecting.....</div>";
} 

else{ echo "<div class='alert alert-danger'>Error Occured !</div>";
  }}}
	    print 'Withdrawal created with ID: '.$result['result']['id'];
	}
	    
	 else {
		print 'Error: '.$result['error']."\n";
	}
?></div></div></div></div>