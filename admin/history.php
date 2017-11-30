<div class="content">
				<div class="container-fluid">
				<div class="row">
				    <div class="col-lg-6 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Account Activity History</h4>
	                                <p class="category">Lists Account activity histories</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>Username</th>
	                                    	<th>Activity</th>
	                                    	<th>Date</th>
	                                    	<th>IP</th>
	                                    </thead>
	                                    <?php
	                                    require_once('../connect.php');
$query="SELECT * FROM logs";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$m1= $row["username"]; $m2= $row["name"]; $m3= $row["misc"]; $m4= $row["date"];
echo "<tbody><tr><td>	$m1</td><td>$m2</td><td>$m3</td><td>$m4</td></tr></tbody>";

}}
	                                    
	                                    ?>
	                                    
	                                    
	                                    
	                                    </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
			</div>
				</div>
			</div>
			
	                                    