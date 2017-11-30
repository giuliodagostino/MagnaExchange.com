<div class="content"><br><br>
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php 
				if($se7==0){
				    $ac=$_POST['myid'];
	 echo "<div class='alert alert-warning'> Auto Withdrawal is not activated on this system....</div>";
				echo "<br>
	 <a href='request.php?id=$ac'> click to request withdrawal</a>";    
				}
				
				else{
				require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup($se2, $se1);
require('../connect.php'); $bt=$_POST['btc']; 
if($bt=="BTC"){
    $wallet=$wallet; $bte=$bt*$se3;
}
else if($bt=="LTC"){
    $wallet=$walle; $bte=$bt*$se11;
}
else if($bt=="ETH"){
    $wallet=$wal; $bte=$bt*$se12;
}
$ac=$_POST['myid']; $curr=$_POST['cur'];    $wt=$_POST['wt'];
	$result = $cps->CreateWithdrawal($bte, $curr, $wallet);
	if ($result['error'] == 'ok') {
$query="SELECT * FROM account WHERE id='$ac' AND misc='$client' LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"];	
 
$bt2=$bt;
$sql="UPDATE `account`  SET 
`status` = 'P',`withdrawal` = '$bt2',`te` = '1'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','$bt $curr withdawal was confirmed','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
	$sql="INSERT INTO withdrawals(username,amount,transact,date) VALUES('$client','$bt','$ip','$date')";
if($conn->query($sql)==TRUE){
	}
    unset($_POST['ac']);
    $_POST['ac']='';
    $subject = 'Payment Recieved';
$to = $em;
$from = 'support@smartlovas.com';
// To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();
 
    $message .= '<html>
</body></table><TD height="2" style="LINE-HEIGHT: 2.5;
	MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif;
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 15px">Hi '.$client.', <br> This is to notify you that a withdrawal '.$wt.'BTC was confirmed to your account  on www.smartlovas.com thank you for using our services</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>';

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;">...</h4><br></center>' ;

    } else{
echo 'Email sent';
}
    header('Refresh: 3; url=index.php?coins');
 echo "<div class='alert alert-success'>Payment Confirmed</div>";
 echo "<a href='?tesimony'><button type='submit' name='invest' class='btn btn-warning btn-fill btn-wd'><i class='fa fa-check'></i> Click to Continue</button>
                                </a>";
} 

else{ $rwp= "<div class='alert alert-danger'>Error Occured !</div>";
  }}}
	    print 'Withdrawal created with ID: '.$result['result']['id'];
	}
	    
	 else {
		print 'Error: '.$result['error']."\n";
	}}
?>
</div></div></div></div>
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
				
				
				
				</div></div></div></div>
				
				
			