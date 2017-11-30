<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-12 col-md-12">
<h4>PLS FIRST SEND MONEY TO THE USER PAYPAL BEFORE CONFIRMING PAYMENT</h4>
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">REQUESTS FOR THE SENDING OF CASH IN EXCHANGE</h4>
	                                <p class="category">Do not confirm any user if you have not successfully sent money to them</p>
	                            </div>
				<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>USER</th>
	                                        
											<th>INVOICE</th>
											<th>DATE</th>
	                                    	<th>AMOUNT DEPOSITED</th>
	                                    	<th>RECIEVERS WALLET</th>
	                                    	
											<th>OPTIONS</th>
	                                    </thead>	    
		<?php 
$query="SELECT * FROM account WHERE request=1 AND status='P'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
     $acca= $row["amount"]; $accc= $row["currency"]; $accw= $row["withdrawal"]; $accm= $row["misc"];  $acctop= $row["username"];   $accid= $row["id"];
$accd= $row["date"];  $accd2= $row["date_mature"];  $payi= $row["payme"];




    $rop="<form method='post' action='wpay.php'>
<div style='display:none;'>

<input type='text' class='form-control border-input'
value='$accid' name='accid' required hidden >

</div>
 <button type='submit' class='btn btn-success btn-fill btn-wd'><i class='fa fa-paypal'></i> Confirm Payment ($$acca $accc)</button>
</form>

";
 $acctop=substr($acctop,0,9)."..."; if($wall2==''){ $wall2="<span style='color:red;'>No wallet found, Do not confirm this yet!</span>";  }
  echo "<tbody><tr><td>$accm </td><td> $acctop</td><td>$$accd </td><td>$$acca </td> <td>$payi </td>
  <td>$rop</td>";
}}
	?>
	
	 </table></div>
	
	

				    
</div>
	</div></div>
	</div>	</div>
			</div>
</div></div></div>