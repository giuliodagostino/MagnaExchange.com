<div class="content">
				<div class="container-fluid">
				<div class="row">
				    
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">ALL USERS ACCOUNTS</h4>
	                                <p class="category">Lists of all users avalaible</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-info">
	                                       
											<th>Username</th> 
	                                    	<th>Status</th>
	                                    	<th>Email</th> 
	                                    	<th>Date</th> <th>Actions</th>
	                                    </thead>
	                                    <?php require_once('../connect.php');
$query="SELECT * FROM users ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$aid= $row["id"]; $aus= $row["username"]; $aps= $row["password"];
$ast= $row["status"]; $asts= $row["status"];  $ada= $row["misc"];
 $aem= $row["email"];  $awa= $row["wallet"];
  if($ast=='N'){ $ast="<span style='color:red;'>UnVerified</span>"; }
  if($ast=='P'){ $ast="<span style='color:green;'>Verified</span>"; }
  if($ast=='B'){ $ast="Blocked"; }
  if($ast=='S'){ $ast="Suspended"; }
  
  if($asts=='S'){ $oth="<a href='verify.php?ui=$aid'><button class='btn btn-success btn-fill btn-wd'>Unhold</button></a>"; } else{
      $oth=" <a href='suspend.php?ui=$aid'><button class='btn btn-danger btn-fill btn-wd'>Suspend</button></a>";
  }
 if($asts=='N'){ $viv="<a href='verify.php?ui=$aid'><button class='btn btn-success btn-fill btn-wd'>Verify</button></a>"; }
 if($asts=='P'){ 
      $viv="<a href='unverify.php?ui=$aid'><button class='btn btn-link btn-fill'>Unverify</button></a>";
  }
  if($asts=='B'){ $vov="<a href='unblock.php?ui=$aid'><button class='btn btn-info btn-fill btn-wd'>Unblock</button></a>"; }
 else { 
      $vov="<a href='block.php?ui=$aid'><button class='btn btn-warning btn-fill'>Block</button></a>";
  }
  
$act="<a href='?single_view=$aus'><button class='btn btn-info btn-fill btn-wd'>Transacts</button></a>";
  echo "<tbody><tr><td> $aus</td><td>$ast</td><td>$aem</td><td>$ada</td><td>$act  $viv $oth $vov </td></tr></tbody>";
}}
  ?>
	                                </table>
	                                <HR>
	                                    <h3 class="title">VERIFIED USERS: <?php
$query="SELECT COUNT(username) AS rt FROM users WHERE  status='P'";
$result=$conn->query($query);
if($result->num_rows>0) { 
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
echo $rt;
}} else { echo "0"; }

?><small> </small></h3>
<h3 class="title">UNVERIFIED USERS: <?php
$query="SELECT COUNT(username) AS rt FROM users WHERE  status='N'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
echo $rt;
}} else { echo "0"; }

?><small> </small></h3>

<h3 class="title">LOCKED USERS: <?php
$query="SELECT COUNT(username) AS rt FROM users WHERE  status='B'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
echo $rt;
}} else { echo "0"; }

?><small> </small></h3>

<h3 class="title">SUSPENDED USERS: <?php
$query="SELECT COUNT(username) AS rt FROM users WHERE  status='S'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$rt=$row["rt"];
echo $rt;
}} else { echo "0"; }

?><small> </small></h3>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
		
</div></div></div>