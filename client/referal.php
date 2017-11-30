<br><br>
				    <div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="panel-footer back-footer-blue" style="background:#069;">
                                <h4> <i class="fa fa-users"></i> Referals and bonuses
								(1.5% profit of referals investment)- minimum withdrawable is <?php echo $se3; ?>btc</h4>

                            </div>
				 <div class="panel panel-primary text-center no-boder bg-color-black">
				 
                            <div class="panel-body">
				<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>Referal</th>
											<th>Email</th>
	                                    	<th>Account Status</th>
	                                    	<th>Reg_Date</th>
											<th>Total Invest</th>
	                                    	<th>% Profit</th>
											<th>Withdraw Options</th>
	                                    </thead>	    
		<?php
$query="SELECT * FROM users WHERE referal='$client' AND refstat=0 ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
    $rst= $row["status"]; if($rst=='P'){ $rst='Verified'; } if($rst=='N'){ $rst='UnVerified'; }
$r2= $row["email"]; $r3= $row["misc"]; $r4= $row["username"];
  echo "<tbody><tr><td>	$r4 </td><td> $r2</td><td>$rst</td><td>$r3</td>";
  ?>
  <?php
  $query2="SELECT SUM(amount) AS rt2 FROM account WHERE misc='$r4' AND currency ='BTC' AND status='P' ";
$result2=$conn->query($query2);
if($result2->num_rows>0) {
while ($row2=$result2->fetch_assoc()) {
$rtio=$row2["rt2"]; $rtpo=$row2["rt2"]; $rppp=$row2["refpay"];
if($rtio==""){ $rtio='-'; } if($rtpo==""){ $rtpo='-'; }
}}
  $query2="SELECT SUM(amount) AS rt2 FROM account WHERE misc='$r4' AND currency ='BTC' AND status='P' AND refpay=0 ";
$result2=$conn->query($query2);
if($result2->num_rows>0) {
while ($row2=$result2->fetch_assoc()) {
$rti=$row2["rt2"]; $rt2=$row2["rt2"];   $rt2=$rt2*1.5/100; $rtp=$rt2;
if($rt2==''){ $rt2=0; }
if($rt2 >= $se3){
$mm="<form method='post' action='?rcheckout'>
<div style='display:none;'>
<input type='text' class='form-control border-input'
value='$rt2' name='btc' required hidden >
<input type='text' class='form-control border-input'
value='$r4' name='refn' required hidden >
<input type='text' class='form-control border-input'
value='BTC' name='curr' required hidden >
</div>
 <button type='submit' class='btn btn-info
btn-fill btn-wd'>Withdraw Bonus($rt2 btc)</button>
</form>";

	
} 

else{
    
if($rppp==1){
    
    $mm="Bonus Withdrawn";
}  else {
    $mm='Not withdrawable yet';
}
    
    
}

echo "<td>$rtio <i class='fa fa-bitcoin' </td><td>$rtpo <i class='fa fa-bitcoin'></i></td><td>$mm</td></tr></tbody>";
}} else { echo 'unidentified payment'; } ?>
  
  <?php 
 
}} else {
	 echo "<br><br><br><div class='alert alert-warning alert-dismissible'>
<br> <strong>Opps!</strong><br>You do not have any User under your referal link  

</div>";
	
	}
	

	?>
	
	 </table></div>
	
	

				    
</div>
	</div></div>
	</div>	</div>