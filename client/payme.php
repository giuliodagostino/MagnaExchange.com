<?php require('../connect.php');
$id=$_POST['id']; $payme=$_POST['paypal'];
$sql="UPDATE `account`  SET 
`request` = '1',`paypal` = '1',`payme` = '$payme'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {

echo "Request has been sent, You will be notified when deposit has been made to your paypal! 
<br>
<a href='index.php?coins'>CONTINUE</a>";

}




?>