<div class="col-lg-12 col-md-12 col-sm-12">
							
	                            <div class="alert alert-info" data-background-color="blue">
	                                <h4 class="title">MY ORDERS  </h4>
	                                <p class="category">Lists all orders made on my account.</p>
	                            </div>
				
                               

                           
				
	                             <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>Amount</th>
											<th>Coin</th>
	                                    	<th>Status</th>
	                                    	<th>Action</th>
	                                    	<th>Date Of Exchange</th>   <th>Options</th> 
	                                    	
	                                    </thead>
	                                    <?php 
$query="SELECT * FROM account WHERE misc='$client' AND status='P' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $acr= $row["te"];  $actg= $row["cron"]; $act= $row["cron"]; $req= $row["request"];   $acca= $row["amount"];  $accs= $row["status"]; $accc= $row["currency"]; $accw= $row["withdrawal"];
 if($act=='0'){ $act="<span style='color:orange;'>Buy</span>"; }
 if($act=='1'){ $act="<span style='color:blue;'>Sell</span>"; }
$earned= $row["te"]; $earned=round( $earned, 5, PHP_ROUND_HALF_UP);
	 $accid= $row["id"]; $earned=$earned-$accw; $accd= $row["date"];
  if($accs=='N'){ $accss="<span style='color:red;'>Pending</span>"; }
  if($accs=="P"){ $accss="<span style='color:green;'>Active</span>"; }
  if($accs=='D'){ $accss="Sold"; }
  if($accs=='M'){ $accss="Withdrawn"; }
  
$accs= $row["status"];
  if($accs=='P' && $req==0 && $acr==0 && $actg==0){
      $myid=$accid;
	  $mm =" <form method='post' action='?req'>
<div style='display:none;'>

<input type='text' class='form-control border-input'
value='$myid' name='myid' required hidden >
<input type='text' class='form-control border-input'
value='$acca' name='btc' required hidden >
<input type='text' class='form-control border-input'
value='$accc' name='cur' required hidden >
</div>
<button type='submit' class='btn btn-warning 
btn-fill btn-wd'  ><i class='fa fa-shopping-cart'></i> Click To Withdraw $$acca $accc</button>
</form>";
	  
  }
  else if($accs=='P' && $req=='0' && $acr=='0' && $actg=='1'){
      $myid=$accid;
	  $mm ="<form method='post' action='?sellnow'>
<div style='display:none;'>
<input type='text' class='form-control border-input'
value='$accw' name='bn' required hidden >
<input type='text' class='form-control border-input'
value='$myid' name='myid' required hidden >
<input type='text' class='form-control border-input'
value='$acca' name='btc' required hidden >


</div>
<button type='submit' class='btn btn-info btn-fill btn-wd'  ><i class='fa fa-paypal'></i> Click To cashout $$acca $accw</button>
</form>";
	  
  }
  
  else if($accs=='P' && $acr=='1' && $actg=='0'){
	$mm="<button type='submit' class='btn btn-success 
btn-fill btn-wd'  disabled='' ><i class='fa fa-check'></i>  Recieved $$acca $accc</button>";  
  }
   else if($accs=='P' && $acr=='1' && $actg=='1'){
	$mm="<button type='submit' class='btn btn-info 
btn-fill btn-wd'  disabled='' ><i class='fa fa-check'></i>  Sold $acca $accc </button>";  
  }
  
   else if($accs=='P'  && $req=='1' && $actg=='0'){
	$mm="<button type='submit' class='btn btn-info 
btn-fill btn-wd'  disabled='' ><i class='fa fa-refresh'></i> Buy , Processing $accc</button>";  
  }
  else if($accs=='P' && $req=='1' && $actg=='1'){
	$mm="<button type='submit' class='btn btn-warning 
btn-fill btn-wd'  disabled='' ><i class='fa fa-refresh'></i> Sold , Processing Payment</button>";  
  }
  else {
  }
 if($actg==1){ $acca='$'.$acca;} else { $acca='$'.$acca;}  
  echo "<tbody><tr><td>	$acca </td><td>	$accc </td><td>$accss</td> <td>$act</td>
  <td>$accd</td> <td>$mm</td> </tr></tbody>";
}} else{
 echo "NO TRANSACT AVALAIBLE ON YOUR ACCOUNT YET!"; }
  ?>
	                                </table>
	                            </div>
	                        