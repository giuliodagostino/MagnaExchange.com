<?php  require_once('../connect.php');   
    // Fill these in with the information from your CoinPayments.net account.
    $cp_merchant_id = 'bbf5fab1a759b69b745bccd21f61fabe';
    $cp_ipn_secret = 'MagnaExchange2017ie!@!';
    $cp_debug_email = 'support@magnaexchange.com';
    
    //These would normally be loaded from your database, the most common way is to pass the Order ID through the 'custom' POST field.
 
   
    
    function errorAndDie($error_msg) {
        global $cp_debug_email;
        if (!empty($cp_debug_email)) {
            $report = 'Error: '.$error_msg."\n\n";
            $report .= "POST Data\n\n";
            foreach ($_POST as $k => $v) {
                $report .= "|$k| = |$v|\n";
            }
            mail($cp_debug_email, 'CoinPayments IPN Error', $report);
        }
        die('IPN Error: '.$error_msg);
    }
    
    if (!isset($_POST['ipn_mode']) || $_POST['ipn_mode'] != 'hmac') {
        errorAndDie('IPN Mode is not HMAC');
    }
    
    if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
        errorAndDie('No HMAC signature sent.');
    }
    
    $request = file_get_contents('php://input');
    if ($request === FALSE || empty($request)) {
        errorAndDie('Error reading POST data');
    }
    
    if (!isset($_POST['merchant']) || $_POST['merchant'] != trim($cp_merchant_id)) {
        errorAndDie('No or incorrect Merchant ID passed');
    }
        
    $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
    if ($hmac != $_SERVER['HTTP_HMAC']) {
        errorAndDie('HMAC signature does not match');
    }
    
    // HMAC Signature verified at this point, load some variables.

    $txn_id = $_POST['txn_id'];
    $item_name = $_POST['item_name'];
    $item_number = $_POST['item_number'];
    $amount1 = floatval($_POST['amount1']);
    $amount2 = floatval($_POST['amount2']);
    $currency1 = $_POST['currency1'];
    $currency2 = $_POST['currency2'];
    $status = intval($_POST['status']);
    $status_text = $_POST['status_text'];
    $invoice = $_POST['invoice'];
 $query="SELECT * FROM account WHERE username='$invoice'  LIMIT 1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"]; $ms= $row["ms"];	
}} 
$sql="UPDATE `account`  SET 
`status` = 'P',`te` = '0',`cron` = '0'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
    $ip= $_SERVER["REMOTE_ADDR"];
$date=date('d M, Y  h:i:s a');
$sql="INSERT INTO logs(username,name,date,misc) VALUES('ms','Payment was confirmed - invoice NO. $tv','$ip','$date')";
if($conn->query($sql)==TRUE){
	} 
 echo "<div class='alert alert-success'>Payment Confirmed!</div>";
} 

else{ echo "<div class='alert alert-danger'>Error Confirming Payment!</div>";
  }

    //depending on the API of your system, you may want to check and see if the transaction ID $txn_id has already been handled before at this point

    // Check the original currency to make sure the buyer didn't change it.
     
    
    // Check amount against order total
    
  
    if ($status >= 100 || $status == 2) {
        // payment is complete or queued for nightly payout, success
    } else if ($status < 0) {
        //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
    } else {
        //payment is pending, you can optionally add a note to the order page
    }
    die('IPN OK');
?>