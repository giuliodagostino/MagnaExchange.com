<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
                                <h4 class='alert alert-info'> <i class="fa fa-paypal"></i> CLICK  BELOW TO MAKE PAYMENT USING PAYPAL </h4>

                 
<?php
$btc=$_POST['btc']; 
if($btc<10){ echo "<div class='alert alert-danger'>Please choose amount above $10</div>";}

else{  $cur=$_POST['cur'];  $btc=$_POST['btc'];
$dat=date('d M, Y h:i:sa'); $ooy=$_POST['ooy'];
$change=sha1($dat); 
$_SESSION['tv']=$change;
$dat2=date('Y-m-d');
$sql="INSERT INTO account(username,amount,date,status,date_mature,currency,misc,withdrawal,percentage,te,cron)
VALUES('$change','$btc','$dat','N','$dat2','$cur','$client','0','0','0','0')";
if($conn->query($sql)==TRUE){ 
$ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','You requested to Buy $btc $cur','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
}
	?>
	
<center><form class="paypal" action="paypal/payments.php" method="post" id="paypal_form" target="_blank">
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="lc" value="UK" />
		<input type="hidden" name="currency_code" value="USD" />
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
		<input type="hidden" name="first_name" value="<?php echo $client; ?>"  />
		<input type="hidden" name="amount" value="<?php echo $ooy; ?>"  />
		<input type="hidden" name="last_name" value="<?php echo $client; ?>"  />
		<input type="hidden" name="payer_email" value="<?php echo $em; ?>"  />
		<input type="hidden" name="item_number" value="<?php echo $change; ?>" / >
  <button type="submit"  name="m_process" class="alert alert-info"><i class='fa fa-paypal'></i> Pay Now</button>
  
</form></center>
<center>Am not ready yet to make payment? <a href='remove.php'>CLICK HERE</a></center>
 </div></div></div></div>
 
 
 <?php
}
$subject = 'Invoice Created';
$to = $em;
$from = 'support@magnaexchange.com';
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
	has been created for you to pay <b>'.$btc.' BTC</b>  on magna exchange Crypto Exchange website.</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>';

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;"></h4><br></center>' ;

    } else{
echo 'Email sent';
}
    ?>