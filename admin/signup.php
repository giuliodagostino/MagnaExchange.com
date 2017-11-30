<div class="col-md-6 col-sm-12">
          <form name="" id="contact_form"  >
	       <h3> <i class="fa fa-folder" ></i> Create Account</h3>
		 <div class="control-group">
                    <div class="controls">
<input class="form-control"  type="text" placeholder="Username" id="name" name="name"  required=""><br>
	<div class="clearfix"></div>
						</div>
						<div class="key">
											<input  type="text" id="email" class="form-control" placeholder="Email" name="email"  required=""><br>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="passwor" id="passwor" placeholder="Password" class="form-control" name="Password"   required=""><br>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input class="form-control"  type="passwor2" id="passwor2" placeholder="Confirm Password" name="Confirm Password"  required=""><br>
							<div class="clearfix"></div>
						</div>
						
						<?php if(isset($_GET['ume'])){ $ref= $_GET['ume']; 
								echo "<input type='text' value='$ref' class='form-control' name='ref' id='ref' placeholder='Referal' readonly  required ><br>"; }  ?>
								<br>
									<div class="key">
									   
<input type="text" class="form-control" id='wallet' name="wallet" placeholder="Wallet Address -btc" required=""><br>
						<center><i style='font-size:40px; color:#069;' 
						class='fa fa-refresh fa-spin' id='spi'></i></center>
						</div>
<button type="button" id="submit" class="btn btn-primary"> <i class="fa fa-user" ></i> Signup</button><br />

</div>
					</form>
</div>