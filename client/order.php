
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-12">
                                <h4 class='alert alert-info'> <i class="fa fa-truck"></i> ORDER TRACKING LIST </h4>

                           </DIV>
				 <div class="panel panel-primary text-center  bg-color-black">
				 
                            <div class="panel-body no-boder" >
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th># Order</th>
											<th>Amount</th>
											<th>Type</th>
	                                    	<th>Crypto</th>
	                                    	<th>Date</th>   <th>Status</th> <th>Activity</th>
	                                    	
	                                    </thead>
	                                    <?php 
$query="SELECT * FROM account WHERE misc='$client' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $acr= $row["request"]; $order= $row["username"];    $acca= $row["amount"];  $accs= $row["status"]; $accc= $row["currency"]; $accw= $row["withdrawal"]; 
$type= $row["te"];   
$cro= $row["cron"];  $croc= $row["cron"];

if($cro==1){ $ayc="Sell";} else if($cro==0){ $ayc="Buy";}
if($cro==1 && $type=='1' && $accs=='P'){ $cro="Sell, Recieved Cash"; } else if($cro==1 && $type=='0' && $accs=='P'){ $cro="Sell, <i class='fa fa-info'></i> On Process"; }
else if($cro==0 && $type=='1' && $accs=='P'){ $cro="Buy, <i class='fa fa-check'></i>Recieved Coin"; } else if($cro==0 && $type=='0' && $accs=='P'){ $cro="Buy, <i class='fa fa-info'></i> On Process"; } else{ $cro='Unidentified'; }
	 $accid= $row["id"];  $accd= $row["date"];
  if($accs=='N'){ $accss="<span style='color:red;'>Pending</span>"; }
  if($accs=="P"){ $accss="<span style='color:green;'>Paid </span>"; }
  if($accs=='D'){ $accss="Sold"; }
  if($accs=='M'){ $accss="Withdrawn"; }
  if($croc==1){ $acca=$acca.$acca;} else { $acca='$'.$acca;}
				$accs= $row["status"]; $order=substr($order,0,7)."...";
echo "<tbody><tr><td>#$order </td><td>$acca </td><td>$ayc </td><td>$accc </td>
  <td>$accd</td> <td>$accss </td>  <td>$cro </td></tr></tbody>";  
}} else{
echo "NO ORDER AVALAIBLE ON YOUR ACCOUNT YET!"; }
  ?>
	                                </table>
	                            </div>
	                        </div></div></div>