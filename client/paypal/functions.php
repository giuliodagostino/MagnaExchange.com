<?php
// functions.php
function check_txnid($tnxid){
	global $link;
	return true;
	$valid_txnid = true;
	//get result set
	$sql = mysql_query("SELECT * FROM `payments` WHERE txnid = '$tnxid'", $link);
	if ($row = mysql_fetch_array($sql)) {
		$valid_txnid = false;
	}
	return $valid_txnid;
}



function updatePayments($data){
	global $link;
	
	if (is_array($data)) {
	   $sql="INSERT INTO payments(txnidh, payment_amount, payment_status, itemid, createdtime)
 VALUES(
				'".$data['txn_id']."' ,
				'".$data['payment_amount']."' ,
				'".$data['payment_status']."' ,
				'".$data['item_number']."' ,
				'".date("Y-m-d H:i:s")."'
				)";
if($conn->query($sql)==TRUE){
    
}
	
	}
}
