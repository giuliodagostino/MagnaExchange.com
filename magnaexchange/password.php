<?php require_once('connect.php'); ?>
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
                <div class="row" style="background:white;">
					
					
					<div class="col-sm-12 col-sm-12 col-xs-12">

<div>

<div class="container">
  <?php
$email=$_POST['myusername'];
$u=$_POST['u'];
$query="SELECT * FROM users WHERE email='$email' AND username='$u' ";
$result=$conn->query($query);
if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
	$code= $row["password"];
	
	
 
$subject = ' Password Recovery';
$to = $email;
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
<TABLE style="MIN-WIDTH: 348px; WIDOWS: 1; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 0px; FONT: 12px arial, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(34,34,34); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px" border=0 cellSpacing=0 cellPadding=0 width="100%" height="90%">';

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
  <TABLE style="MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-BOTTOM-WIDTH: 0px; BORDER-TOP: rgb(240,240,240) 1px solid; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-top-left-radius: 3px; border-top-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4584f6>
  <TBODY>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=72 colSpan=3></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD>
  <TD style="MIN-WIDTH: 300px; LINE-HEIGHT: 1.25; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(255,255,255); FONT-SIZE: 24px">Password Recovery-magnaexchange</TD>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=32></TD></TR>
  <TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" height=18 colSpan=3></TD></TR></TBODY></TABLE></TD></TR>
<TR>
<TD height="auto" style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="BORDER-BOTTOM: rgb(192,192,192) 1px solid; MIN-WIDTH: 332px; BORDER-LEFT: rgb(240,240,240) 1px solid; MAX-WIDTH: 600px; BORDER-TOP-WIDTH: 0px; BORDER-RIGHT: rgb(240,240,240) 1px solid; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px" border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=#fafafa>
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
<TD style="PADDING-BOTTOM: 4px; LINE-HEIGHT: 1.5; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 4px">Your magnaexchange Account<SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(34,34,34)">'.$uid.'</A><SPAN class=Apple-converted-space>&nbsp;</SPAN>password code is '.$code.'
  <TABLE style="MARGIN-TOP: 48px; MARGIN-BOTTOM: 48px" border=0 cellSpacing=0 cellPadding=0>
<TBODY>
<TR vAlign=center>
  <TD width="4" height=24 align=middle style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif"></TD></TR>
<TR vAlign=top>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" align=middle>&nbsp;</TD>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif" width=16></TD>
<TD width="342" style="LINE-HEIGHT: 1.2; MARGIN: 0px; FONT-FAMILY: arial, sans-serif"><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 16px">Password Reset Link</SPAN><BR><SPAN style="FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: red; FONT-SIZE: 30px; BACKGROUND-COLOR: rgb(255,255,255);"><a href="https://magnaexchange.com/change.php?cc='.$code.' & em='.$u.'">Change Password</a></SPAN></TD></TR></TBODY></TABLE>';
    $message .= '<B>We always make sure,we serve you better</B><BR>
  Why are we sending this? Because we take security very serious and make sure our users uses their true identity.<BR>
  and to protect you when somebody else is accessing your account.</TD></TR>
<TR>
<TD style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(32,32,32); FONT-SIZE: 13px; PADDING-TOP: 28px">Radical Bitcoin team</TD></TR>
<TR height=16></TR>
<TR>
<TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">
<TABLE style="LINE-HEIGHT: 1.5; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; COLOR: rgb(185,185,185); FONT-SIZE: 12px">
<TBODY>';
     $message .= '<TR>
  <TD style="MARGIN: 0px; FONT-FAMILY: arial, sans-serif">    For more information, visit the<SPAN class=Apple-converted-space>&nbsp;</SPAN><A style="COLOR: rgb(66,133,244); TEXT-DECORATION: none" href="https://magnaexchange.com">Loverbloom  Help Center</A>.</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
<TR height=32></TR></TBODY></TABLE></TD></TR>
<TR>';
    $message .= '<TD height="2" style="LINE-HEIGHT: 1.5; MARGIN: 0px; FONT-FAMILY: Roboto-Regular, Helvetica, Arial, sans-serif; MAX-WIDTH: 600px; COLOR: rgb(188,188,188); FONT-SIZE: 10px"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></P>

</BODY></HTML>';

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;">Your Password has been sent to this email '.  $email.' Please check your spam folder if not found in the inbox</h4><br></center>' ;

    } else{

        echo 'Email not valid!';

    }
	}} else {
	    
	    
	     echo "<BR><BR><div class='alert alert-danger alert-dismissible'>
EMAIL Not Found.....
</div>";
	}
    ?>
</div>
						</div>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
		
			
	
	
        <!--Footer-->
     