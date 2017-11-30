<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
							<div class="card card-stats">
								<h4 style='color:white;'><i class="fa fa-credit-card"></i> Hit the button below to make payment</h4>
                                
	<div class="panel panel-primary text-center no-boder bg-color-black">
				 
                            <div class="panel-body">
										<?php 
                                                $dat=date('d M, Y h:i:sa');
$change=sha1($dat); 
$_SESSION['tv']=$change;
$btc=$_POST['btc'];
$cash=$_POST['cash'];
$cur=$_POST['cur'];
$pamt=$_POST['btc'];
$dotcheck=substr($pamt,0,1);
if($dotcheck=="."){
    $pmt="0".$pamt;
    $pamt=$pmt;
}
$dotcheck2=substr($pamt,0,1);
if($dotcheck=="$"){
    $pmt="".$pamt;
    $pamt=$pmt;
}
else{
    
    echo "";
}
   
if(isset($_POST['topup'])){
$change=$_POST['topup'];
$_SESSION['tv']=$change; 
 $sql="UPDATE `account`  SET 
`username` = '$change'
  WHERE `id`=$myid";
if ($conn->query($sql) === TRUE) {
}
}
$dat=date('d M, Y h:i:sa');
$change=sha1($dat); 
$_SESSION['tv']=$change;

$dat2=date('Y-m-d');
if(isset($_POST['retry'])){
    $sql="UPDATE `account`  SET 
`username` = '$change'
  WHERE `id`=$myid";
if ($conn->query($sql) === TRUE) {
}
    
} 
else{ 
 
 

 $dat2=date('Y-m-d');
$sql="INSERT INTO account(username,amount,date,status,date_mature,currency,misc,withdrawal,percentage,te,cron)
VALUES('$change','$btc','$dat','N','$dat2','$cur','$client','$cash','0','0','1')";
if($conn->query($sql)==TRUE){ 
    
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','You requested to sell $btc $cur','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
}

   else{ echo ""; }
  
    
    
} 

?>


<form action="https://www.coinpayments.net/index.php" method="post">
	<input type="hidden" name="cmd" value="_pay">
	<input type="hidden" name="reset" value="1">
	<input type="hidden" name="merchant" value="<?php  echo $se5; ?>">
		<input type="hidden" name="cart_name" value="Buying Of Crypto">
	<input type="hidden" name="currency" value="USD">
	<input type="hidden" name="amountf" value="<?php  echo $pamt; ?>">
	<input type="hidden" name="item_name" value="<?php echo $client; ?>-Crypto exchange for dollar">
	<input type="hidden" name="invoice" value="<?php  echo $change; ?>">
	<input type="hidden" name="want_shipping" value="0">
	<input type="hidden" name="success_url" value="https://www.cryptopaynow.com/client/index.php?callback">	
	<button type="submit"  style=" 
	background:blue; border-radius:10px; border:6px solid orange; width:50%; 
	height:100px; font-size:20px; color:white;" > <i class='fa fa-exchange'></i> CLICK TO SEND  <?php  echo $cur; ?> IN EXCHANGE </button> 
</form>
<hr>
<center>Am not ready yet to make payment? <a href='remove.php'>CLICK HERE</a></center>
  
                                        </div></div></div>
												<div class="clearfix"></div> 	
									</div></div></div></div>
									
<?php
$subject = 'Invoice Created';
$to = $em;
$from = 'support@cryptopaynow.com';
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
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 15px">Hi '.$client.', <br> An invoice : <b>'.$change.' </b><br>
	has been created for you to pay <b>'.$btc.' BTC</b>  on cryptopaynow Crypto Exchange website.</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>';

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;"></h4><br></center>' ;

    } else{
echo 'Email sent';
}
    ?>



