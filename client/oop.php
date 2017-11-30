<?php require_once('../connect.php');
$client=$_SESSION['u2'];
$change=$_POST['change'];  $mess=$_POST['brief'];
$query="SELECT * FROM account WHERE username='$change'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id=$row["id"]; $ms=$row["misc"];	
 
$sql="UPDATE `account`  SET 
`manual` = '$mess', `request` = '1', `sell` = '1'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
  
 echo "<div class='alert alert-success'>Request Sent for Processing of Your payment.....!</div> <a href='index.php?pending'> Continue To dashboard</a>";
} 

else{ echo "<div class='alert alert-danger'>Error Confirming Payment on invoice No. $invoice !</div>";
  }}} else{ echo "<div class='alert alert-danger'>Error Confirming Payment on invoice: $invoice !</div>";
  }
?>