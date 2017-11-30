<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php  if(isset($_POST["update"])){
$n=$_POST["n"];

$w=$_POST["w"]; $pass=$_POST["pass"];
$query="SELECT * FROM users WHERE username='$client' AND password='$pass'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$id= $row["id"];	
}} 
$sql="UPDATE `users`  SET 
`wallet` = '$w',
`email` = '$n'
  WHERE `id`=$id";
if ($conn->query($sql) === TRUE) {
   
 echo "<div class='alert alert-success'> <i class='fa fa-check'></i> Updated Successful!</div>";
} else{ echo "<div class='alert alert-danger'>Wrong password!</div>";}}
?> 
							<div class="card card-stats" style="border: 2px solid #09192A;">
								<div class="panel-footer back-footer-blue" style="background:#09192A; color:white;">
                                <h4><i class="fa fa-calculator"></i> CALCULATE  RATES</h4>
                                

                            </div>
									 <div class="panel panel-primary text-center no-boder bg-color-black">
				 
                            <div class="panel-body">
										
										<h5><b>Today:</b> 1 USD  <i class="fa fa-exchange"></i>  <?php echo $se4.$se3; ?></h5><br>
										<form method='post'>
										<div class="col-md-12">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control border-input"
												style='height:45px;' id='dols2' onKeyup="add_number2()" 
												placeholder="Enter USD Amount" name=""  required >
                                            </div>
                                        
										</div><br>
                                         <div class="col-md-12">
                                            <div class="form-group">
										<input type="text" readonly='' id='ooy2'  
										class="form-control border-input"  >
										</div></div>
										 
                                            
                                            <a><button type="button" name="update" 
											class="alert alert-danger">
											<i class='fa fa-calculator '></i> Make Exchange</button></a>
                                        </div> 
										
										</div></div>
                                    
                                
                                    <div class="clearfix"></div>
										</form>
									</div></div></div></div>
									<script type="text/javascript">
function add_number2(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dols2").value);
            var result = first_number * second_number + ' <?php echo $se3; ?>';
			
            document.getElementById("ooy2").value = result;    
            
}
</script>