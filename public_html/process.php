<?php require_once('connect.php');
//Fetching Values from URL
$name2=trim($_POST['name1']);
$name2=str_replace(' ','',$name2);
$email2=$_POST['email1'];
$ref2=$_POST['ref1'];
$passworo=$_POST['passwor1'];
$passwor2=md5($_POST['passwor1']);
$wallet2=trim($_POST['wallet1']);
//Insert query
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$row=2;
foreach($tr=$db->query("SELECT * FROM users  WHERE username='$name2'") as $row) {}
if($row==TRUE){
$u=$row["username"];
if($name2==$u){ echo "<center><div class='alert alert-danger'><i class='fa fa-info'></i> 
THIS USERNAME ALREADY EXIST</div></center>";}
else{
	}
	$emv=md5($name2);
	$date=date("d M ,y");
$sql="INSERT INTO users(username,wallet,email,password,confirm,status,misc,referal)
 VALUES('$name2','$wallet2','$email2','$passworo','$emv','N','$date','$ref2')";
if($conn->query($sql)==TRUE){
     $to = $email2;

    $subject = 'Verification Required';

    $from = 'support@magnaexchange.com';

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<HTML> Hy '. $name2.', <br>
<BODY><P>
<TABLE style="MIN-WIDTH: 348px; WIDOWS: 1; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 0px; FONT: 12px arial, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(34,34,34); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px" border=0 cellSpacing=0 cellPadding=0 width="100%" height="90%">';

    $message .= ' Your Verification Link on www.magnaexchange.com <br>
https://www.magnaexchange.com/checkpoint.php?l='.$emv.'</SPAN><BR><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: white; FONT-SIZE: 20px; "><BR><a href="https://magnaexchange.com/checkpoint.php?l='.$emv.'">Confirm</a></SPAN></TD></TR></TBODY></TABLE>';
   

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center></center>' ;

    } else{

        echo 'Email not sent!';

    }
    
	$_SESSION["u2"]=$name2;
	setcookie('username', $name2, time()+60*60*24*30, '/');
setcookie('password',$passwor, time()+60*60*24*30, '/');
echo "<center><h3><i class='fa fa-user'></i></h3><br></center><h3>Verification has been sent to $email2 <br>
Go to your mail address to complete registration</h3><br><a href='client/index.php'
 class='view resw3'> Click to Login </a>";
}
else
{
echo "<a href='signup.php'>Retry</a>".$conn->error; }
}
?>
