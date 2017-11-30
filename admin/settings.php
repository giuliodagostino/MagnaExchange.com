<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$s1=$_POST["se1"]; $s2=$_POST["se2"]; $s3=$_POST["se3"]; $s4=$_POST["se4"]; $s5=$_POST["se5"]; $s6=$_POST["se6"]; $s7=$_POST["se7"]; $s8=$_POST["se8"]; $s9=$_POST["se9"]; $s10=$_POST["se10"]; $s11=$_POST["se11"];

$sql="UPDATE `settings`  SET 
`pubkey` = '$s1',`prikey` = '$s2',`min` = '$s3',`max` = '$s4',`merchant` = '$s5',`skey` = '$s6',`auto` = '$s7',`months` = '$s8',`manual` = '$s9',`ltc` = '$s10',`eth` = '$s11'
  WHERE `id`=1";
if ($conn->query($sql) === TRUE) {
 
 echo "<div class='alert alert-success'>Settings Updated!</div>";
} else{ echo "<div class='alert alert-danger'>Error!</div>";}}
?> 
						
						
						
<?php
$query="SELECT * FROM settings WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["pubkey"]; 
 $se2= $row["prikey"]; 
  $se3= $row["min"];
  $se4= $row["max"];
  $se5= $row["merchant"]; 
  $se6= $row["skey"]; $se7= $row["auto"]; $se8= $row["months"]; $se9= $row["manual"];

}} else
{}
						
?>
						
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="fa fa-gear"></i>
								</div>
										<h4>Script Setups- Go to coinpayment.net to get the following api keys</h4>
										<br>
										<form method='post'>
										<div class="col-md-9">
                                            <div class="form-group">
                                                <label>public key</label>
                                                <input type="text" class="form-control border-input"  placeholder="Coinpayment public key" name="se1" value="<?php echo $se1; ?>">
                                            </div>
                                        </div>
										
										<div class="col-md-9">
                                            <div class="form-group">
                                                <label>Private Key</label>
                                                <input type="text" class="form-control border-input"  placeholder="Coinpayment private key" name="se2" value="<?php echo $se2; ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Merchant ID</label>
                                                <input type="text" class="form-control border-input"  placeholder="merchant id" name="se5" value="<?php echo $se5; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Secret Key</label>
                                                <input type="text" class="form-control border-input"  placeholder="Secret key" name="se6" value="<?php echo $se6; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>DOLLAR EQUIVALENT TO BTC</label>
                                                <input type="text" class="form-control border-input"  placeholder="Minimum of withdrawal" name="se3" value="<?php echo $se3; ?>" hidden>
                                            </div>
                                        </div>
<div class="col-md-9">
                                            <div class="form-group">
                                                <label>$1 LITECOIN EQUIVALENT?</label>
                                                <input type="text" class="form-control border-input"  placeholder="eg 0.00002" name="se10" value="<?php echo $se10; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>$1 ETHERIUM EQUIVALENT?</label>
                                                <input type="text" class="form-control border-input"  placeholder="eg 0.00001" name="se11" value="<?php echo $se11; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>EXCHANGE CHARGE PERCENTAGE PER TRANSACTS</label>
                                                <input type="text" class="form-control border-input"  placeholder="eg 0.00009" name="se4" value="<?php echo $se4; ?>" hidden >
                                            </div>
                                        </div>
                                        
										
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Auto withdraw (0=no  , 1=yes)</label>
                                                <input type="text" class="form-control border-input"  placeholder="set 0 or 1" name="se7" value="<?php echo $se7; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Maturity Days</label>
                                                <input type="text" class="form-control border-input"  placeholder="e.g 30" name="se8" value="<?php echo $se8; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control border-input"  placeholder="input manual payment wallet address-btc" name="se9" value="<?php echo $se9; ?>" hidden >
                                            </div>
                                        </div>
                                        
                                        
										<div class="text-center">
                                    <button type="submit" name="update" class="btn btn-success btn-fill btn-wd"><i class='fa fa-check'></i> Update Setup</button>
                                </div>
                                    <div class="clearfix"></div>
										</form>
									</div></div></div>