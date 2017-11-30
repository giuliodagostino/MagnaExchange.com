<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Transaction Stats</h4>
	                                <p class="category">Lists transactions </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>User</th><th>Amount Paid/th>
											<th>In Exchange Of Coin</th><th>Activity</th>
	                                    	<th>Status</th>
	                                    	<th>Date</th> 
	                                    </thead>
	                                    <?php 
$query="SELECT * FROM account ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $accw= $row["withdrawal"];  $accid= $row["id"]; $accu= $row["misc"];
$accd= $row["date"];  $accd2= $row["date_mature"]; $actg= $row["cron"];



 
 $acca= $row["amount"];  $accc= $row["currency"];
  $accid= $row["id"];
  $accs= $row["status"]; $acc= $row["status"]; $type= $row["cron"]; $ms= $row["username"]; if($type=='1'){ $activity='<span style="color:green;">Sell</span>'; }
  else if($type=='0'){ $activity='<span style="color:orange;">Buy</span>'; }
  if($accs=='N'){ $accs="<span style='color:red;'>Pending</span>"; }
  if($accs=='P'){ $accs="<span style='color:green;'>Paid</span>"; }
  if($accs=='Z'){ $accs="Withdrawn"; }
  if($accs=='M'){ $accs="Matured"; }
  if($acc=='N'){ $acc="<a href=''><a href='cancel.php?ui=$accid'><button class='btn btn-danger btn-fill btn-wd'>Cancel</button></a> <a href=''><a href='approve.php?ui=$accid &type=$type'><button class='btn btn-success btn-fill btn-wd'>Approve</button></a><a href=''><a href='decline.php?ui=$accid'><button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>"; }
  if($acc=='P'){ $acc="<a href='decline.php?ui=$accid'>
   <button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>"; }
   if($acc=='M'){ $acc="<a>Payed Finish</a><a href='decline.php?ui=$accid'>
   <button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>"; }
    if($acc=='Z'){ $acc="Withdrawn"; }
    if($actg==1){ $acca=$acca.$accc;} else { $acca='$'.$acca;}
    if($actg==1){ $accc=$accc;} else { $accc=$accc;}
  echo "<tbody><tr><td>	$accu </td><td>	$acca </td><td> $accc</td><td>$activity</td><td>$accs</td>
  <td>$accd</td></tr></tbody>";
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