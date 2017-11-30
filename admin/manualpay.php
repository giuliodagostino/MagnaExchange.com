<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">UNPROCESSED PAYMENTS</h4>
	                                <p class="category">Lists all MANUAL PAYMENT REQUESTS BY CLIENTS</p>
	                            </div>
				<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>USER</th>
	                                        
											<th>INVOICE</th>
											<th>ACTIVITY</th>
	                                    	
	                                    	<th>AMOUNT PAID</th>
	                                    	<th>COIN IN EXCHANGE</th>
											<th>OPTIONS</th>
	                                    </thead>	    
		<?php 
$query="SELECT * FROM account WHERE status='N'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$r3= $row["username"]; $r3=substr($r3,0,8).'...'; $r4= $row["misc"]; $r5= $row["currency"]; $r6= $row["amount"];  $accid= $row["id"]; $stt= $row["status"]; $type=$row["cron"];  if($type=='1'){ $activity='<span style="color:green;">Sell</span>'; }
  else if($type=='0'){ $activity='<span style="color:orange;">Buy</span>'; }
if($stt=='N'){
$mm="<a href=''><a href='cancel.php?ui=$accid'><button class='btn btn-danger btn-fill btn-wd'>Cancel</button></a> <a href=''><a href='approve.php?ui=$accid'><button class='btn btn-success btn-fill btn-wd'>Approve</button></a><a href=''><a href='decline.php?ui=$accid'><button class='btn btn-warning btn-fill btn-wd'>Decline</button></a>";
} else { $mm="<a href=''><a href='cancel.php?ui=$accid'><button class='btn btn-danger btn-fill btn-wd'>Cancel</button></a> "; }
if($type==1){ $r6=$r6.$accc;} else { $r6='$'.$r6;}
    if($type==1){ $r5=$r5;} else { $r5=$accc;}
  echo "<tbody><tr><td>$r4 </td><td> # $r3</td> <td> $activity</td><td> $r6</td> <td> $r5</td><td>$mm </td>";
}}
?>
	
	 </table></div>
	
	

				    
</div>
	</div></div>
	</div>	</div>
			</div>
</div></div></div>