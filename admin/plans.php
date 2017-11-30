<?php require_once('../connect.php');
$client=$_SESSION['u2'];  
if(!isset($client)){ header('location:logout.php'); }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard | <?php echo $_SESSION['u2'];  ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    
</head>

<body>
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$s1=$_POST["se1"]; $s2=$_POST["se2"]; $s3=$_POST["se3"]; $s4=$_POST["se4"]; $s5=$_POST["se5"]; $s10=$_POST["se10"]; $s11=$_POST["se11"];
 $s6=$_POST["se6"]; $s7=$_POST["se7"]; $s8=$_POST["se8"]; $s9=$_POST["se9"];
$sql="UPDATE `plans`  SET 
`p1` = '$s1',`p2` = '$s2',`p3` = '$s3',`insurance` = '$s5',`bankrupt` = '$s6'
,`days` = '$s7' ,`safety` = '$s8',`freeze` = '$s9',`capital` = '$s10',`name` = '$s11'
  WHERE `id`=$s4";
if ($conn->query($sql) === TRUE) {
   
 echo "<div class='alert alert-success'>Setting Updated!</div>";
} else{ echo "<div class='alert alert-danger'>Error!</div>";}}
?> 
<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-bar-chart"></i>
								</div>
										<h4>Change Packages and percentage  profit for the Website</h4>
										<br>
										
<?php
$query="SELECT * FROM plans ";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["p1"]; 
 $se2= $row["p2"];  $se4= $row["id"]; $se3= $row["p3"]; $se5= $row["insurance"];
 $se8= $row["safety"]; $se9= $row["freeze"]; $se10= $row["capital"];
 $se6= $row["bankrupt"]; $se7= $row["days"]; $se11= $row["name"];
 if($se6==0){ $ch2=''; $ch="checked='checked'"; } if($se6==1){  $cco="gray"; } else{ $cco="lavender";} if($se6==1){ $ch=''; $ch2="checked='checked'"; } 
 echo "<form method='post'  >
										<div class='col-md-6'  >
                                            <div class='form-group' style='background:$cco;'>
                                            <b> <label>From(btc) Minimum Investment</label></b>
                                                <input type='text' class='form-control border-input' 
												placeholder='Package name' name='se11' value='$se11'>
                                               <b> <label>From(btc) Minimum Investment</label></b>
                                                <input type='text' class='form-control border-input' 
												placeholder='min' name='se1' value='$se1'>
                                                <b><label>To(btc) Maximum Investment</label></b>
                                                <input type='text' class='form-control border-input' 
												placeholder='max' name='se2' value='$se2'>
                                                <b><label>Daily profit percentage</label></b>
                                                <input type='text' class='form-control border-input' 
												placeholder='Daily Profit' name='se3' value='$se3' >
											
											
                                                <b><label>Insurance Percentage</label></b>
                                                <input type='text' class='form-control border-input'
												placeholder='percent' name='se5' value='$se5'>
												<b><label>Days Of Investment</label></b>
                                                <input type='text' class='form-control border-input'
												placeholder='Days of Investment' name='se7' value='$se7'>
												<b><label>Safety Fund</label></b>
                                                <input type='text' class='form-control border-input'
												placeholder='Safety Fund' name='se8' value='$se8'>
												<b><label>Freeze Token</label></b>
                                                <input type='text' class='form-control border-input'
												placeholder='freeze token' name='se9' value='$se9'>
												<b><label>Capital Return</label></b>
                                                <select class='form-control border-input'
												placeholder='Capital Return' name='se10' >
												<option value='$se10'>$se10</option>
												<option>Yes</option>
												<option>No</option>
												</select>
                                                
												<input type='text'  placeholder='id' name='se4' 
												value='$se4'  hidden='hidden' >
												<br><div style='background:black; color:white;' class='btn btn-warning btn-fill btn-wd'>
												<strong>Am Backrupt On This Package</strong>
                                                <input type='radio' 
												 name='se6' value='1' $ch2> YES <span></span>
												  --------  <input type='radio' 
												 name='se6' value='0' $ch > NO
												 </div><br>
                                                <button type='submit' name='update'
												class='btn btn-info btn-fill btn-wd'>
												<i class='fa fa-upload'></i> Update</button>
												
												
                                       
										   </div>
                                        </div>
									
                                
										</form>";
 
}} else
{}
						
?>
 									<br>
									</div></div></div></div>
									<a href='add.php'><button type='submit' name='add' class='btn btn-warning btn-fill btn-wd'>
 <i class='fa fa-plus'></i> Add More Packages</button>	</a>
								<a href='index.php'>Back To Dashboard</a></div>
								

</body>
								</html>