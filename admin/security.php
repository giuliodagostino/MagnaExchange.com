
<?php require_once('../connect.php');
$client=$_SESSION['u2']; 
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
$s1=$_POST["se1"]; $s2=$_POST["se2"];
$sql="UPDATE `admin`  SET 
`username` = '$s1',`password` = '$s2'
  WHERE `id`=1";
if ($conn->query($sql) === TRUE) {
    header('Refresh: 3; url=index.php');
 echo "<div class='alert alert-success'>Settings Updated!</div>";
} else{ echo "<div class='alert alert-danger'>Error!</div>";}}
?> 
						
						
						
<?php
$query="SELECT * FROM admin WHERE id=1";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$se1= $row["username"]; 
 $se2= $row["password"];
}} else
{}
						
?>
						
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="fa fa-gear"></i>
								</div>
										<h4>Change Administrators Username and  Password</h4>
										<br>
										<form method='post'>
										<div class="col-md-9">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input"  placeholder="Username" name="se1" value="<?php echo $se1; ?>">
                                            </div>
                                        </div>
										
								
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control border-input"  placeholder="password" name="se2" value="<?php echo $se2; ?>">
                                            </div>
                                        </div>
                                        
                                        
										<div class="text-center">
                                    <button type="submit" name="update" class="btn btn-warning btn-fill btn-wd"><i class='fa fa-check'></i> Update Setup</button>
                                </div>
                                    <div class="clearfix"></div>
										</form>
									</div></div></div>
								<a href='index.php'>Back To Dashboard</a>
								
</body>
								</html>