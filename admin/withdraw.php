<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-6 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">WITHDRAW YOUR COIN </h4>
	                                <p class="category">Minimum withdrawal daily is 0.0004</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>Amount</th>
											<th>Coin</th>
	                                    	<th>Status</th>
	                                    	<th>Date</th> <th>Withdrawn</th>
	                                    	<th>Options</th>
	                                    </thead>
	                                    <?php 
$query="SELECT * FROM account WHERE misc='$client'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $accw= $row["withdrawal"];  
  $accid= $row["id"];
$accd= $row["date"];  $accd2= $row["date_mature"];
$date1 =date_create("$accd2");
$date2 = date("Y-m-d");
$d2=date_create($date2);
$diff = date_diff($date1,$d2);
$diff=$diff->format("%a"); 
 $bal=$diff ;
 $bb=30-$bal; $cg=$acca/30; $cg2=$cg*$bal; $cg2=$acca+$cg2; $cg2=$cg2-$accw; $cg22=round( $cg2, 8, PHP_ROUND_HALF_UP);
 
 $cga=$acca*2;
 $cga=$cga-$accw;
 if($bal>=30){

$mm="<a href='withdraw.php'><button class='btn btn-success 
btn-fill btn-wd'><i class='fa fa-check'></i> Matured - Withdraw($cga)</button></a>";

} 

else if($bal<30){

$mm="Coin Growth: $cg22 $accc in $bal dy";
if($cg22 >= 0.0004){

$mm="
<form method='post' action='index.php?checkout'>
<div style='display:none;'>
<input type='text' class='form-control border-input'
value='$cg22' name='btc' required hidden >
<input type='text' class='form-control border-input'
value='$accid' name='myid' required hidden >
<input type='text' class='form-control border-input'
value='$accw' name='wt' required hidden >
<input name='curr'  class='form-control border-input' hidden 
value='$accc'>
</div>
 <button type='submit' class='btn btn-success 
btn-fill btn-wd'><i class='fa fa-thumbs-up'></i> Withdraw($cg22 $accc)</button>
</form>";

}

}

  $accs= $row["status"]; $acc= $row["status"]; $ms= $row["username"];
  if($accs=='N'){ $accs="<span style='color:red;'>Pending</span>"; }
  if($accs=='P'){ $accs="<span style='color:green;'>Paid</span>"; }
  if($accs=='Z'){ $accs="Withdrawn"; }
  if($accs=='M'){ $accs="Matured"; }
  if($acc=='N'){ $acc=""; }
  if($acc=='P'){ $acc="$mm"; }
   if($acc=='M'){ $acc="<a><button>Withdrawable</button></a>"; }
    if($acc=='Z'){ $acc="Withdrawn"; }
  echo "<tbody><tr><td>	$acca </td><td> $accc</td><td>$accs</td><td>$accd</td><td>$accw</td><td>$acc</td></tr></tbody>";
}}
  ?>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
</div></div></div>