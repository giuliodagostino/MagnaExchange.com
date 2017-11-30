<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Transaction Stats</h4>
	                                <p class="category">Lists transaction  made so far</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>User</th><th>Amount</th>
											<th>Coin</th>
	                                    	<th>Status</th>
	                                    	<th>Date</th> <th>Withdrawn</th>
	                                    	<th>Options</th>
	                                    </thead>
	                                    <?php $idd=$_GET['single_view'] ; 
$query="SELECT * FROM account WHERE misc='$idd' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $accw= $row["withdrawal"];  $accid= $row["id"]; $accu= $row["misc"];
$accd= $row["date"];  $accd2= $row["date_mature"];
$date1 =date_create("$accd2");
$date2 = date("Y-m-d");
$d2=date_create($date2);
$diff = date_diff($date1,$d2);
$diff=$diff->format("%a"); 
 $bal=$diff ;
 $bb=$se8-$bal; $cg=$acca/$se8; $cg2=$cg*$bal; $cg2=$acca+$cg2; $cg2=$cg2-$accw; $cg2=round( $cg2, 8, PHP_ROUND_HALF_UP);
 
$cga=$acca*2;
 $cga=$cga-$accw;
 if($bal>=$se8){

$mm="<a ><button class='btn btn-success 
btn-fill btn-wd'><i class='fa fa-check'></i> Matured - Withdraw($cga)</button></a>";

} 

else if($bal<$se8){

$mm="<a ><button class='btn btn-info 
btn-fill btn-wd'><i class='fa fa-time'></i> $bb days Left($cg2 $accc increase-$bal days)</button></a><a href=''><a href='decline.php?ui=$accid'><button class='btn btn-warning btn-fill btn-wd' name='decline'>Decline</button></a>";

} 
 $acca= $row["amount"];  $accc= $row["currency"];
  $accid= $row["id"];
  $accs= $row["status"]; $acc= $row["status"]; $ms= $row["username"];
  if($accs=='N'){ $accs="<span style='color:red;'>Pending</span>"; }
  if($accs=='P'){ $accs="<span style='color:green;'>Paid</span>"; }
  if($accs=='Z'){ $accs="Withdrawn"; }
  if($accs=='M'){ $accs="Matured"; }
  if($acc=='N'){ $acc="<a href=''><a href='cancel.php?ui=$accid'><button class='btn btn-danger btn-fill btn-wd'>Cancel</button></a> <a href=''><a href='approve.php?ui=$accid'><button class='btn btn-success btn-fill btn-wd'>Approve</button></a><a href=''><a href='decline.php?ui=$accid'><button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>"; }
  if($acc=='P'){ $acc="$mm <a href='payout.php?ui=$accid &cs=$acca'><button class='btn btn-info btn-fill btn-wd'>Pay Finish</button></a>"; }
   if($acc=='M'){ $acc="<a>Payed Finish</a><a href='decline.php?ui=$accid'><button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>"; }
    if($acc=='Z'){ $acc="Withdrawn"; }
  echo "<tbody><tr><td>	$accu </td><td>	$acca </td><td> $accc</td><td>$accs</td><td>$accd</td><td>$accw</td><td>$acc</td></tr></tbody>";
}}
  ?>
	                                </table><HR>
	                                
    
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
</div></div></div>