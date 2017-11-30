<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
							<div class="card card-stats">
								<h4 style='color:white;'><i class="fa fa-credit-card"></i> Hit the button below after making payment</h4> 
                                
	<div class="panel panel-primary text-center no-boder bg-color-black">
				 
                            <div class="panel-body">
                                
										<?php 
                                                $dat=date('d M, Y h:i:sa');
$change=sha1($dat); 
$_SESSION['tv']=$change;
$btc=$_POST['btc']; $ico=$_POST['ico'];
$cur=$_POST['cur'];
$pamt=$_POST['btc'];
$dotcheck=substr($pamt,0,1);
if($dotcheck=="."){
    $pmt="0".$pamt;
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
VALUES('$change','$ico','$dat','N','$dat2','$cur','$client','0','0','0','1')";
if($conn->query($sql)==TRUE){ 
    
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$client','You requested to Invest $btc $cur','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
}
else
{
    echo "";
 }  
    
    
}


?>

<h5><form action="oop.php" method="post">SEND <?php echo $ico.''.$se3." TO ANY OF THIS  WALLETS:"; ?></h5>
<input  name="ty" id='ty' class="form-control border-input" style='border:2px;' placeholder='' value='<?php echo $se8; ?>' readonly='' > <button type='button' class='btn btn-warning 
btn-fill btn-wd' onclick="myFunction()"  >COPY ATTA WALLET</button><br>

<form action="oop.php" method="POST"> 
    <input  name="change" id='change' value="<?php echo $change; ?>" readonly='' style='color:white;' >
	<textarea  name="brief" id='' class="form-control border-input" style='border:2px;' placeholder='Please write a brief writeup about the payment you made(eg, name of sender, address,id etc) to help process your request faster by our admins.' required=''></textarea>
	<button type="submit" class='btn btn-info 
btn-fill btn-wd'  style="" > <i class='fa fa-check'></i>  CLICK IF YOU HAVE SENT   <?php  echo $ico.'  '.$se3; ?> IN EXCHANGE </button> 
</form>
<hr>
<center>Am not ready yet to make payment? <a href='remove.php'>CLICK HERE</a></center>
  
                                        </div></div></div>
												<div class="clearfix"></div> 	
									</div></div></div></div>
									<script type="text/javascript">
/* <![CDATA[ */
  function get_object(id) {
   var object = null;
   if (document.layers) {
    object = document.layers[id];
   } else if (document.all) {
    object = document.all[id];
   } else if (document.getElementById) {
    object = document.getElementById(id);
   }
   return object;
  }
get_object("inputdata").innerHTML=DrawCode39Barcode(get_object("inputdata").innerHTML,1);
/* ]]> */
</script>

<?php
$subject = 'Invoice Created';
$to = $em;
$from = 'support@greenduopay.com';
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
	has been created for you to send <b>'.$btc.'  '.$se3.' To this Wallet: <h2>'.$se8.'</h2> </b>  on greenduopay.com Crypto Exchange website.</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>';

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;"></h4><br></center>' ;

    } else{
echo '';
}
    ?>

<script>
    
    function myFunction() {
  var copyText = document.getElementById("ty");
  copyText.select();
  document.execCommand("Copy");
  alert("Wallet Copied: " + copyText.value);
}
</script>
<script>
    
    function myFunction2() {
  var copyText = document.getElementById("ty2");
  copyText.select();
  document.execCommand("Copy");
  alert("Wallet Copied: " + copyText.value);
}
</script>
<script>
    
    function myFunction3() {
  var copyText = document.getElementById("ty3");
  copyText.select();
  document.execCommand("Copy");
  alert("Wallet Copied: " + copyText.value);
}
</script>

