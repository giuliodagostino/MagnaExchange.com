<br><br><br><div class="col-lg-12 col-md-12 col-sm-12">
				 <div class="panel-footer back-footer-blue">
                                <h4> <i class="fa fa-comments fa-3x"></i> Attend To Users Request For help</h4>

                            </div>
				 <div class="panel panel-primary text-center no-boder bg-color-blue">
				 
                            <div class="panel-body">
                                
                                <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                        <th>#</th>  <th>User</th>
											
	                                    	<th>message</th> <th>Actions</th> 
	                                    	
	                                    </thead>
	                                    
<?php require_once('../connect.php'); 

$query="SELECT DISTINCT * FROM support WHERE admin='admin' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
 $wd= $row["username"];
$action= $row["name"];
 $rid=$row['id'];
$sub=substr($action,0,10) ; 
}}
     echo "<tbody><tr><td>$rid</td><td>$wd</td><td>$sub</td><td><a href='index.php?support&uid=$wd'><button class='btn btn-warning btn-fill btn-wd'><i class='fa fa-comments'></i> Reply</button></a></td></tr></tbody>";
     ?>
	                                    </table></div>
                                
                                
                                </div></div>