<div class="content">
				<div class="container-fluid">
					<div class="row">
					    <div class="col-lg-12 col-md-12 col-sm-12">
					        
					       </div>
					    <div class="clearfix"></div> 
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<i class="fa fa-plus"></i>
								</div>
								<div class="card-content">
									<p class="category">Total  Bought</p>
									<h6 class="title">$<?php
$query="SELECT SUM(amount) AS rt FROM account WHERE status='P'AND cron=0";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
$rt=round( $rt, 8, PHP_ROUND_HALF_UP);
echo $rt;
}} else { echo "0.00"; }

?></h6>

								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-money"></i>     <i class="fa fa-money"></i> <a href="index.php?coins">View all Buy Orders..</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<i class="fa fa-bar-chart"></i>
								</div>
								<div class="card-content">
									<p class="category">TOTAL ICO SOLD</p>
									<h6 class="title">$<?php
$query="SELECT SUM(AMOUNT) AS rt FROM account WHERE status='P' AND cron=1 ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
$rt=round( $rt, 8, PHP_ROUND_HALF_UP);
echo $rt;
}} else { echo "0.00"; }

?> </h6>
			</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-bar-chart"></i> <a href="index.php?withdraw">view all buy/sell Orders...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<i class="fa fa-book"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Transactions</p>
									<h3 class="title"><?php
$sqlk="SELECT * FROM account ";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount ; }
  ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="fa fa-copy"></i>Transactions made
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-user-circle"></i>
								</div>
								<div class="card-content">
									<p class="category">Verified Clients</p>
									<h3 class="title">+<?php
$sqlk="SELECT * FROM users WHERE status='P'";
$resultk=mysqli_query($conk,$sqlk);
$rowcount=mysqli_num_rows($resultk);
if($rowcount==""){ echo "0";} else{
echo $rowcount ; }
  ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
					</div>

				
					

						<?php include('coins.php');  ?>