<div class="content">
<div class="container-fluid">
<div class="row"> 
<div class="col-lg-12 col-md-12 col-sm-12">
<h4 style='color:purple;'><i class="fa fa-gear"></i> Password Change</h4>
<div class="panel panel-primary text-center no-boder bg-color-blue">
<div class="panel-body">
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$s1=$_POST["se1"]; $s2=$_POST["se2"]; $old=$_POST["old"]; $s3=$_POST["se3"];
if($s2=$s3){
 
$sql="UPDATE `users`  SET 
`password` = '$s2'
  WHERE `id`=$cid AND password='$old'";
if ($conn->query($sql) === TRUE) {
    header('Refresh: 3; url=index.php');
    $subject = 'Password Changed';
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
	MAX-WIDTH: 600px; COLOR: black; FONT-SIZE: 15px">Hi '.$client.', <br> This is to notify you that you changed your account password on greenduopay from <b>'.$old.' to  '.$s2.'</b> , please if you did not make such changes, click to reset your account password again www.greenduopay.com/recover.php</TD></TR>
	</TBODY></TABLE></P></BODY></HTML>';

    // Sending email

    if(mail($to, $subject, $message, $headers)){

        echo '<center><h4 style="color:black;"></h4><br></center>' ;

    } else{
echo 'Email sent';
}
 echo "<div class='alert alert-success'>Password Updated!</div>";
 session_destroy();
} else{ echo "<div class='alert alert-danger'>Error occured!</div>";}}else {
    echo "<div class='alert alert-danger'>Password do not match!</div>";    
    
} }

?> 
						
						
						
<?php
$query="SELECT * FROM users WHERE id=$cid";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $se2= $row["password"];
}} else
{}
						
?>
						
							<div class="card card-stats">
								
										<br>
										<form method='post'>
										<div class="col-md-12">
                                            <div class="form-group">
                                               
                                                <input style='height:50px;' type="text" class="form-control border-input"  placeholder="Username" name="se1" value="<?php echo $client; ?> " disabled >
                                            </div>
                                        </div>
										<div class="col-md-12">
                                            <div class="form-group">
                                            
                                                <input style='height:50px;' type="password" class="form-control border-input"  placeholder="Enter old password" name="old" required>
                                            </div>
                                        </div>
								
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <input style='height:50px;' type="password" class="form-control border-input"  placeholder="New password" name="se2" required >
                                                
                                              <input style='height:50px;' type="password" class="form-control border-input"  placeholder="Confirm password" name="se3" required >
                                            </div>
                                            
                                            	<div class="text-center">
                                    <button style='height:30px;' type="submit" name="update" class="btn btn-info btn-fill btn-wd"><i class='fa fa-lock'></i> Change</button> 
                                    or 
                                    <a href='../recover.php'><button style='height:30px;' type="submit"  class="btn btn-warning btn-fill btn-wd"><i class='fa fa-refresh'></i> Reset password</button></a>
                                        </div>
                                        
                                        
									
                                    
                                    
                                </div>
                                    <div class="clearfix"></div>
										</form>

                            </div></div></div> </div></div></div> </div></div></div> </div></div>