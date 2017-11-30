<?php 
require('header.php');

?>

<section id="footer" class="wrapper">
 <div class="container">
<div class="col-sm-12 col-md-12 col-lg-12"> 
<h2 class="animation-box wow bounceIn animated">CONTACT US HERE OR USE THE LIVE CHAT</h2>
<?php 
if(isset($_POST['send'])){
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$messager=$_POST['message'];
$to = 'info@magnaexchange.com';
$subject = 'Clients Report';
$from = $email;

$message = 'Message From '.$name.'<br> <b>'.$messager.' </b><br> here is my email to reply to my request .$email.';
// Sending email
if(mail($to, $subject, $message)){
echo "<center><div class='alert alert-success'>
Thanks, We recieved your email, and we will get back to you soon.</div></center>" ;
} else{
echo 'Email not sent!';
}
 }   
?>
  <form class="row form wrapper" method="POST" action=''>
                <h3>Leave A Message</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="First Name">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Email address">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Phone</label>
                    <input name="phone" class="form-control" type="text" placeholder="Phone No.">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">Message</label>
                        <textarea class="message form-control" placeholder="Write message"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" name="send" type="submit" value="Send Message">
                </div>
            </form>
</div>
</div>
</section>

<?php 
require('footer.php');

?>