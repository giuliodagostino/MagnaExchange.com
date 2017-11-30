<?php require('header.php'); ?>
<section id="footer" class="wrapper">
 <div class="container">
<div class="col-sm-6 col-md-6 col-lg-6"><h2 class="animation-box wow bounceIn animated">BUY CRYPTO</h2>

<script type="text/javascript">
function add_number2(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dols").value);
            var result = second_number * first_number / 100 ;
            var rss = result + second_number ;
			
            document.getElementById("ooy").value = rss;    
            
}
</script>


				<div class="col-lg-12 col-md-12 col-sm-12" >
				
							
							
									
				 
                            <div class="panel-body" style=''>
                             <form method='post' action='signup.php' >
<div class="input-group" >
    <span class="input-group-addon" style='background:linen; color:black'><i class="fa fa-dollar"></i></span> 
<input type="text" class="" style='height:50px; color:green; width:100%;' id='dols' onKeyup="add_number2()"  placeholder="Enter Amount In Dollar" name="btc"  required ></div>
                                           <br>
                                       
										 <div class="input-group" >
    <span class="input-group-addon" style='background:linen; color:black'><i class="fa fa-exchange"></i></span><select style='height:50px; color:green; width:100%;' name='cur'  class="" >
                                                <option>BTC</option>
                                                <option>LTC</option>
                                                <option>ETH</option></select>
                                           </div>
                                           <br><b>
										     Exchange Charge:<?php echo $se4.'%'; ?>			
										     
										     
										   </b>
                                         <br>
									<div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-money"></i></span>	<input type="text" name='ooy' id='ooy' style='height:50px; color:green; width:100%;' 
										class="" readonly=''></div>
									
                                          
                                               
                                                
												<div class="clearfix"></div> 							
										<p>
                                    <center><button type="submit"  name="invest" 
									class="alert alert-info"><i class='fa fa-paypal'></i> Continue</button></center>
									
                                </p>
                                    
										</form>
									</div></div>

</div>

<div class="col-sm-6 col-md-6 col-lg-6"><h2 class="animation-box wow bounceIn animated">SELL CRYPTO</h2>



<script type="text/javascript">
function add_number(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dolss").value);
            var result = second_number * first_number / 100 ;	
            var resul = second_number - result .toFixed(2);
            document.getElementById("ooys").value = resul;    
            
}
</script>

				<div class="col-lg-12 col-md-12 col-sm-12" >
				
						
						
									 
				 
                            <div class="">
                                <?php 
                                                   
      ?>
										<form method='post' action='signup.php' >
										    <div class="col-md-12">
											 
                                           
									
								
									
										
                                               <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-dollar"></i></span> <input type="number" class="form-control"
												style='height:;' name='ico' id='dolss' onKeyup="add_number()" 
												placeholder="Enter How many dollar coin  you  are sending?"   required >
                                            </div>
                                            
											<br>
									 <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-money"></i></span><select style='height:50px;' name='cur'  class="form-control border-input" >
                                                <option>BTC</option>
                                                <option>LTC</option>
                                                <option>ETH</option>
											</select>
                                             </div>  
                                         
                                             <h6>TOTAL AMOUNT TO RECIEVE - <b> Exchange Charge:<?php echo $se4.'%'; ?></b></h6>
                                            
										
										 <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-paypal"></i></span>
    <input type="text" name="btc" id='ooys' value='0.00' style='height:50px; color:green; width:100%;' 
										class="" readonly >
										</div>
									<br>
                                        
                                                <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-exchange"></i></span> <select style='height:50px;' name='cash'  class="form-control" >
                                                <option>CASH</option>
                                                 <option>BTC</option>
                                                  <option>LTC</option>
                                                   <option>ETH</option>
                                      </select>
                                           </div>
												<div class="clearfix"></div> 							
										<p>
                                   <center> <button type="submit"  name="invest" 
									class="alert alert-info"><i class='fa fa-exchange'></i> Continue </button></center>
									
                                </p>
                                    
										</form>
									</div></div>
</div>



</div>

</section>
    <!-- HHHHHHHHHHHHHHHHHH        Video          HHHHHHHHHHHHHHHH -->
    <div id="video" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">YOUR BEST CRYPTO CURRENCY EXCHANGER</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <img src="img/feature.png" alt="feature" class="video img-responsive animation-box wow animated bounceInDown">
            <p>
                Use MagnaExchanger to Buy or Sell Bitcoin, Litecoin. Etherium easier and fast. With Low charges
            </p>
        </div> <!-- /.container -->
    </div> <!-- /#video -->
<section id="footer" class="wrapper">
 <div class="container">
            

<div class="col-sm-8 col-md-8 col-lg-8"><h2 class="animation-box wow bounceIn animated">LIVE EXCHANGES</h2>
 <table class="table">
    <thead>
      <tr>
        <th>USERNAME</th>
        <th>TRANSACTION</th>
        <th>AMOUNT</th>
        <th>DATE/TIME </th>
      </tr>
    </thead>
    <tbody>
      <?php

$query="SELECT * FROM account WHERE status='P' ORDER BY id DESC limit 10";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $accw= $row["withdrawal"];  $accid= $row["id"]; $accu= $row["misc"];
$accd= $row["date"];  $accd2= $row["date_mature"]; $acct=$row["te"]; if($acct==1){ $accte="<b style='color:orange;'>SELL</b>"; } else if($acct==0) { $accte="<b style='color:yellow;'>BUY</b>"; }
echo "<tr><td>$accu</td> <td>$accte</td> <td>$ $acca</td> <td>$accd</td></tr>";
}}
?>
      
    </tbody>
  </table>
</div><div class="col-sm-4 col-md-4 col-lg-4">
<h2 class="animation-box wow bounceIn animated">UPDATES</h2>
<button type="button" class="btn btn-info">Verified Users : <?php
$sqlk="SELECT * FROM users WHERE status='P'";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "000";} else{
echo $rowcount;}
  ?> </button>
<br>
<button type="button" class="btn btn-success">Total Cryptos Bought : $<?php
$query="SELECT SUM(amount) AS rt FROM account WHERE currency='BTC' AND status='P' AND te=0 ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
$rt=round( $rt, 8, PHP_ROUND_HALF_UP);
echo $rt;
}} else { echo "0.00"; }

?> </button><br>

<button type="button" class="btn btn-warning">Total Cryptos Sold : $<?php
$query="SELECT SUM(amount) AS rt FROM account WHERE currency='BTC' AND status='P' AND te=1 ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
$rt=round( $rt, 8, PHP_ROUND_HALF_UP);
echo $rt;
}} else { echo "0.00"; }

?> </button>
<br>
<button type="button" class="btn btn-info">Crypto Sell Transacts : <?php
$sqlk="SELECT * FROM account WHERE status='P' AND te=1";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "000";} else{
echo $rowcount;}
  ?> </button>
<br>
<button type="button" class="btn btn-danger">Crypto Buy Transacts : <?php
$sqlk="SELECT * FROM account WHERE status='P' AND te=0";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "000";} else{
echo $rowcount;}
  ?> </button>
</div>
</div>
</section>
   

    <!-- HHHHHHHHHHHHHHHHHH        Speciality         HHHHHHHHHHHHHHHH -->
    <div id="speciality" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">PROCEDURES</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <div class="row">
                <div class="col-sm-4 wow animated fadeInLeft">
                    <div class="special-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3>BUYING </h3>
                    <p>
                        To buy Btc, Eth or ltc you make cash payment through our paypal merchant and your account is automatically confirmed on a successful payment.
                    </p>
                </div>
                <div class="col-sm-4 animation-box wow bounceIn animated">
                    <div class="special-icon">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3>SELLING</h3>
                    <p>
                        We process your crypto you want to sell using our coinpayment merchant and once treansaction is made successful and confirmed, your paypal account will be credited automatically.
                    </p>
                </div>
                <div class="col-sm-4 wow animated fadeInRight">
                    <div class="special-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <h3>Easy to Use</h3>
                    <p>
                        Our user panel platform is easy to use,managed and keeps tracks of every bit of transacts made on your account.
                    </p>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#speciality -->


  



    <!-- HHHHHHHHHHHHHHHHHH        Price Table          HHHHHHHHHHHHHHHH -->

    <section id="pricing" class="wrapper">
        
        <div  class="container">
            <div class="row">
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                    <i class="fa fa-map-marker"></i>
                    <h3>Address</h3>
                    <p class="contact">
                        Dubin Ireland <br>
                        Europe
                    </p>
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                    <i class="fa fa-phone"></i>
                    <h3>Phone</h3>
                    <p class="contact">
                        Local: 1-200-123-hello <br>
                        Mobile: 2-800-123-hello
                    </p>
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                    <i class="fa fa-print"></i>
                    <h3>Fax</h3>
                    <p class="contact">
                        Dubin Ireland Europe
                    </p>
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                    <i class="fa fa-envelope"></i>
                    <h3>Email Address</h3>
                    <p class="contact">
                        <a href="mailto:info@magnaexchange.com">info@magnaexchange.com</a> <br>
                        <a href="https://magnaexchange.com">www.magnaexchange.com</a>
                    </p>
                </div>
            </div> <!-- /.row -->
            <?php 
if(isset($_POST['send'])){
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$messager=$_POST['message'];
$to = 'info@magnaexchange.com';
$subject = 'Clients Report';
$from = $email;

$message = 'Message From '.$name.'<br> <b>'.$messager.' </b><br> here is my email to reply to my request '.$email;
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
                        <textarea class="message form-control" name="message" placeholder="Write message"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" name="send" type="submit" value="Send Message">
                </div>
            </form><!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#contact -->

  <?php require('footer.php'); ?>