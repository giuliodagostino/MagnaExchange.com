<?php require_once('connect.php');
 ?>
    <style>
input[type=text], input[type=password], input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: none; border-bottom:3px solid #000050; background:;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #000050;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #000050;
}


</style>
<script>function stripspaces(input)
{
  input.value = input.value.replace(/\s/gi,"");
  return true;
}

</script>
        <!--Home page style-->
        
        <!-- Sections -->

        <section id="portfolio-area" class="sections">
      <div class="container">
                <!-- Example row of columns -->
                <div class="row" style="background:linen;">
					<h1>Verify Account</h1>

<p>Please go to your email and click the confirmation link, to verify your account</p>
<div class="container"><br>
<br>
  <div>
  <?php 
$rl=rand(12000,90000);
$il=$uid.$rl;
$l=md5("$il"); $_SESSION['cv']=$l;
  $check=$_GET['uid'];
  $query="SELECT * FROM users WHERE email='$check' ";
$result=$conn->query($query);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
	$idholder= $row["id"];
$sql="UPDATE `users`  SET 
`confirm` = '$l',`status` = 'N'
 WHERE `id`=$idholder";
if ($conn->query($sql) === TRUE) {
    echo "";
} else{ 
    
 echo "";   
    
}
    
    
}} else{ 
    
    echo "";
}
$l=$_SESSION['cv'];
    $subject = 'magnaexchange bitcoin Verification';
$to = $check;
    $from = 'support@magnaexchange.com';

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<HTML>
<BODY><P>
<TABLE style="MIN-WIDTH: 348px; WIDOWS: 1; TEXT-TRANSFORM: none; BACKGROUND-COLOR: linen; TEXT-INDENT: 0px; FONT: 12px arial, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: black; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px" border=0 cellSpacing=0 cellPadding=0 width="100%" height="90%">';

    $message .= '<TBODY>

<TR align=middle>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="MAX-WIDTH: 600px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
<TBODY>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" align=right>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
<TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
  <TABLE style="MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-BOTTOM-WIDTH: 0px; BORDER-TOP: rgb(240,240,240) 1px solid; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-top-left-radius: 3px; border-top-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4184f3>
  <TBODY>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=72 colSpan=3></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD>
  <TD style="MIN-WIDTH: 300px; LINE-HEIGHT: 1.25; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(255,255,255); FONT-SIZE: 24px">Please Verify magnaexchange.com Account</TD>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=18 colSpan=3></TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD height="auto" style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="BORDER-BOTTOM: rgb(192,192,192) 1px solid; MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-TOP-WIDTH: 0px; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=linen>
<TBODY>
<TR height=16>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" rowSpan=3 width=32></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif"></TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" rowSpan=3 width=32></TD></TR>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="MIN-WIDTH: 300px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR>
<TD style="PADDING-BOTTOM: 4px; LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px">Hi,</TD></TR>
<TR>
<TD style="PADDING-BOTTOM: 4px; LINE-HEIGHT: 1.5; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 4px">Your magnaexchange Account<SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(34,34,34)">'.$uid.'</A><SPAN class=Apple-converted-space>&nbsp;</SPAN>needs verification
  <TABLE style="MARGIN-TOP: 48px; MARGIN-BOTTOM: 48px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR vAlign=center>
  <TD width="4" height=24 align=middle style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif"></TD></TR>
<TR vAlign=top>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" align=middle>&nbsp;</TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=16></TD>
<TD width="342" style="LINE-HEIGHT: 1.2; MARGIN: 0px; FONT-FAMILY: arial, sans-serif"><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 16px">Verification Link<br>
https://magnaexchange.com/checkpoint.php?l='.$l.'</SPAN><BR><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: white; FONT-SIZE: 20px; BACKGROUND-COLOR: rgb(255,255,255);">Confirmation link<BR><a href="https://magnaexchange.com/checkpoint.php?l='.$l.'">Confirm</a></SPAN></TD></TR></TBODY></TABLE>';
    $message .= '<B>We always make sure,we serve you better</B><BR>
  Why are we sending this? Because we take security very serious and make sure our users uses their true identity.<BR>
  and to protect you when somebody else is accessing your account.</TD></TR>
<TR>
<TD style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 28px">Our  team</TD></TR>
<TR height=16></TR>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="LINE-HEIGHT: 1.5; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(185,185,185); FONT-SIZE: 12px">
<TBODY>';
     $message .= '<TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">    For more information, visit the<SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(66,133,244); TEXT-DECORATION: none" href="https://magnaexchange.com/about.php">  Help Center</A>.</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
<TR height=32></TR></TBODY></TABLE></TD></TR>
<TR>';
    $message .= '<TD height="2" style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; MAX-WIDTH: 600px; COLOR: rgb(188,188,188); FONT-SIZE: 10px"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></P>
</BODY></HTML>';

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;">A verification request has been sent to '.  $check.' Please check your spam folder if not found in the inbox</h4><br> OR <a href="resend.php?uid='.$check.'">Click</a>  to Resend</center>' ;

    } else{

        echo 'Email not valid!';

    }

    ?>
					
						</div>
						
						</div>
					</section>