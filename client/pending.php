<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				 
                                <h4 style='color:red;'><i class="fa fa-credit-card fa-2x"></i> MY PENDING ORDERS</h4>

                          
	                            <div class="card-content table-responsive">
	                                <table class="table table-striped table-bordered table-hover">
	                                    <thead class="text-info">
	                                        <th>Amount</th>
											
	                                    	<th>Status</th>
	                                    	<th>Date</th>  <th>Approval request</th>  <th>Actions</th> 
	                                    	
	                                    </thead>
	                                    <?php 
$query="SELECT * FROM account WHERE misc='$client' AND status='N'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $reqq=$row["manual"]; $accw= $row["withdrawal"]; $acctop= $row["username"];   $accid= $row["id"];
$accd= $row["date"];  $accd2= $row["date_mature"]; $uy= $row["cron"];

  $accs= $row["status"]; $acc= $row["status"]; $ms= $row["username"];
$reqq= $row["request"];

if($uy=='0'){ $uyy="<span style='color:orange;'>Awaits Approval</span>";  }
  if($accs=='N'){ $accs="<span style='color:red;'>Pending</span>";  }
  if($accs=='P'){ $accs="<span style='color:green;'>Active</span>"; }
  if($accs=='Z'){ $accs="Withdrawn"; }
  if($accs=='M'){ $accs="Withdrawn"; }
  if($acc=='N'){ $acc="<a href=''><a href='cancel.php?ui=$accid'><button class='btn btn-danger btn-fill btn-wd'>Delete</button> "; }
  if($acc=='P'){ $acc="$mm"; }
   if($acc=='M'){ $acc="<a><i class='fa fa-check' ></i> Withdrawn</a>"; }
    if($acc=='Z'){ $acc="Withdrawn"; }
    
    if($reqq==1){
    $reqq="Sent ";  $acc="<button class='btn btn-success btn-fill btn-wd' disabled='' >Awaiting Approval</button>";
    }
    else {
    $reqq="Not Sent"; 
    }
    if($uy==1){ $acca='$'.$acca;} else { $acca='$'.$acca;}
  echo "<tbody><tr><td>	$acca </td><td>$accs</td><td>$accd</td><td>$reqq</td> <td>$acc</td> </tr></tbody>";
}}
  ?>
	                                </table>
	                            </div>
	                       </div></div></div></div>