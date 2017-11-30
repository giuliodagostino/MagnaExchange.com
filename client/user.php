<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$n=$_POST["n"];
$ltc=$_POST["ltc"]; $eth=$_POST["eth"];
$w=$_POST["w"]; $pass=$_POST["pass"];
$query="SELECT * FROM users WHERE username='$client' AND password='$pass'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"];	
}} 
$sql="UPDATE `users`  SET 
`wallet` = '$w',
`email` = '$n',`ltc` = '$ltc',`eth` = '$eth'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
   
 echo "<div class='alert alert-success'> <i class='fa fa-check'></i> Updated Successful!</div>";
} else{ echo "<div class='alert alert-danger'>Wrong password!</div>".$conn->error;}}
?> 
							<div class="card card-stats">
								<div class="alert alert-info" style="background:; color:white;">
                                <h4><i class="fa fa-user"></i> Edit Profile - <?php echo $client; ?></h4>
                                

                            </div>
									 <div class="panel panel-primary text-center no-boder bg-color-black">
				 
                            <div class="panel-body">
										<br><?php $query="SELECT * FROM users WHERE username='$client'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$wallet= $row["wallet"]; $ltc= $row["ltc"];	 $eth= $row["eth"];
}}  ?>
										<form method='post'>
										<div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control border-input"  placeholder="Email" name="n" value="<?php echo $em; ?>">
                                            </div>
                                        </div>
										
										<div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control border-input"  placeholder="Wallet-btc" name="w" value="<?php echo $wallet; ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                        	<div class="form-group">
                                             
                                                <input type="text" class="form-control border-input"  placeholder="Enter password" name="pass" required>
                                            </div>
                                        </div> 
                                            <div class="col-md-12">
                                        	<div class="form-group">
                                             
                                                <input type="text" class="form-control border-input"  placeholder="Enter LTC Wallet" name="ltc" value="<?php echo $ltc; ?>" required>
                                                <input type="text" class="form-control border-input"  placeholder="Enter ETH Wallet" name="eth" value="<?php echo $eth; ?>" required>
                                            </div>
                                        </div> 
                                            
                                            <button type="submit" name="update" 
											class="alert alert-info">
											<i class='fa fa-upload'></i> Process</button>
                                        </div> 
										
										</div></div>
                                    
                                
                                    <div class="clearfix"></div>
										</form>
									</div></div></div></div>