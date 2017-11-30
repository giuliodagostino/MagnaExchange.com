<?php  
$query="SELECT * FROM account WHERE misc='$client' AND status='N'";
$result=$conn->query($query);
if($result->num_rows>0) {

    echo "<div class='alert alert-warning'>
<i class='fa fa-info'></i> You have pending orders, <a href='?pending' style='color:blue;'>CHECK THEM</a> 
</div>";
} else{
}
if($walle=='') {
echo "<div class='alert alert-warning'>
<i class='fa fa-warning'></i> Some Of Your Wallet Addressess is Empty, Please fill in That now, <a href='?profile'>CLICK HERE</a> 
</div>";    
}
?>
	<div class="col-lg-3 col-md-6 col-sm-6"> 		    
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-exchange"></i>
								</div>
								<div class="card-content">
									<p class="category">Exchanges</p>
									<h3 class="title"><?php
$sqlk="SELECT * FROM account WHERE misc='$client' AND status='P' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount;}
  ?></h3>
								</div>
								<div class="card-footer">
									<div class="">
										No. of exchanges</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Sales</p>
									<h3 class="title">$<?php
$query="SELECT SUM(amount) AS rta FROM account WHERE misc='$client' AND status='P' AND cron=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rta=$row["rta"];
$rta=round( $rta, 3, PHP_ROUND_HALF_UP);
$rta=$rta; if($rta==0){ echo 0.00; } 
else {
echo $rta;
}
}} else { echo "0.00"; }

?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										Total of Crypto Sold
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="fa fa-bar-chart"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Buy</p>
									<h3 class="title">$<?php
$query="SELECT SUM(amount) AS rt FROM account WHERE misc='$client' AND status='P' AND cron=0";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"]; 
$rt=round( $rt, 3, PHP_ROUND_HALF_UP);
if($rt==0){ echo 0.00; } 
else {
echo $rt;
}
}} else { echo "00.00"; }

?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										Total Crypto Bought
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="fa fa-users"></i>
								</div>
								<div class="card-content">
									<p class="category">Investors</p>
									<h3 class="title"><?php
$sqlk="SELECT * FROM users WHERE status='P'";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount;}
  ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										Our Verified Investors
									</div>
								</div>
							</div>
						</div>
					</div>
<a href="?buy">  <span class='btn btn-info 
btn-fill btn-wd' style=''><i  class='fa fa-bar-chart fa-fw'></i> Buy crypto</span></a> 
<a href='?sell'><span class='btn btn-warning 
btn-fill btn-wd' style=''><i  class='fa fa-shopping-cart fa-fw'></i> Sell Crypto</span></a> 
<a href='?order'>  <span class='btn btn-success 
btn-fill btn-wd' style=''><i  class='fa fa-book fa-fw'></i> Order History</span></a> <a href='?order'>  <span class='btn btn-info 
btn-fill btn-wd' style=''><i  class='fa fa-pie-chart fa-fw'></i> Charts</span></a> 
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<center ><i  style='font-size:70px; color:brown;'class="fa fa-users"></i></center>
								<div class="card-content">
									<h4 class="title">Referrals</h4>
									<p class="category"><?php
$sqlk="SELECT * FROM users WHERE referal='$client' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount;}
  ?></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href='?referal'>View</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<center ><i  style='font-size:70px; color:brown;'class="fa fa-signal"></i></center>
								<div class="card-content">
									<h4 class="title">Transactions</h4>
								<?php
$sqlk="SELECT * FROM account WHERE misc='$client' AND status='P' ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount;}
  ?>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href='?deposits'>View</a>
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
						
									<center ><i  style='font-size:70px; color:brown;'class="fa fa-pause"></i></center>
								
								<div class="card-content">
									<h4 class="title">Pending Tasks</h4>
									<?php
$sqlk="SELECT * FROM account WHERE misc='$client' AND status='N'";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount;}
  ?>
								</div>
								<div class="card-footer">
									<div class="stats">
										<a href='?pending'>View</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php include('coins.php'); ?>
				<?php include('buy.php'); ?>
				<?php include('sell.php'); ?>