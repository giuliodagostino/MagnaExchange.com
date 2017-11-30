<?php require_once('../connect.php');
require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup($se2, $se1);
$wallet=$_SESSION['wallet'];
$ac=$_POST['myid']; $curr=$_POST['curr']; $bt=$_POST['btc']; $wt=$_POST['wt'];
	$result = $cps->CreateWithdrawal($bt, $curr, $wallet);
	if ($result['error'] == 'ok') {
$refn=$_POST['refn'];  $rep=$_POST['btc'];
			
$query="SELECT * FROM account WHERE misc='$refn' AND currency ='BTC' AND status='P' AND refpay=0";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"]; 
    $sql="UPDATE `account`  SET 
`refpay` = '1'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
}
    
}}


$ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$refn','Referal bonus withdawal was confirmed successful','$ip','$date')";
if($conn->query($sql)==TRUE){
	 
    unset($_POST['refn']);
    $_POST['refn']='';
    header('Refresh: 2; url=index.php?affiliate');
 echo "<div class='alert alert-success'>... Referal Bonus Withdrawal Request Confirmed</div>";
}

else{ $rwp= "<div class='alert alert-danger'>Error Occured !</div>";
  }
	    print 'Withdrawal created with ID: '.$result['result']['id'];
	}
	    
	 else {
		print 'Error: '.$result['error']."\n";
	}
?>