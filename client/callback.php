<?php
$invoicer=$_POST["invoicer"]; echo $invoicer;
$ego=$_POST["amount"]; echo $ego;
require_once('../connect.php'); 
$query="SELECT * FROM account WHERE username='$invoicer' ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"]; $ms= $row["misc"];	
}} 
$sql="UPDATE `account`  SET 
`amount` = '$ego', `status` = 'P', `te` = '0'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('$ms','Payment was confirmed - invoice NO. $tv','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
 echo "<div class='alert alert-success'>Payment Confirmed!</div>";
} 

else{ echo "<div class='alert alert-danger'>Error Confirming Payment!</div>".$conn->error;
  }



?>
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				
                                <h4 style='color:white;'> <i class="fa fa-paypal"></i> CONGRATULATIONS ON YOUR NEW PAYMENT </h4>

                 <div class="panel-body">           
				 <div class="panel panel-primary text-center no-boder bg-color-black">
				     THANKS! WE RECIEVED THE MONEY ,WE WILL SEND YOU BITCOIN TO YOUR WALLET IN EXCHANGE SHORTLY.
				      <hr><a href='?order'><button type="submit"  style=" 
	background:#e01f3d;; border-radius:10px; width:100%; 
	height:100px; font-size:20px; color:white;" > <i class='fa fa-check'></i> CLICK TO CONTINUE </button></a>
				     
				      </div></div></div></div></div></div>