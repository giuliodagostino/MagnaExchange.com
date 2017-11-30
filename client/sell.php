<script type="text/javascript">
function add_number(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dolss").value);
            var result = second_number * first_number / 100 ;	
            var resul = second_number - result .toFixed(2);
            document.getElementById("ooys").value = resul;    
            
}
</script>

				<div class="col-lg-12 col-md-12 col-sm-12" >
				
						
						
									 
				 
                            <div class="" style='background:white;'>
                                <?php 
                                                   
      ?>
										<form method='post' action='?transact' >
										    <div class="col-md-12">
											 
                                           <div class="alert alert-info" style="">										
										<h4><i class='fa fa-credit-card '></i> SELL BTC,ETH,LTC IN EXCHANGE FOR CASH</h4>
</div>	
                                        </div>
									
								
									
										
                                               <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-dollar"></i></span> <input type="number" class="form-control"
												style='height:;' name='ico' id='dolss' onKeyup="add_number()" 
												placeholder="Enter How many dollar coin  you  are sending?"   required >
                                            </div>
                                            
											<br>
									 <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-money"></i></span><select style='height:50px;' name='cur'  class="form-control border-input" >
                                                <option>BTC</option>
                                                <option>LTC</option>
                                                <option>ETH</option>
											</select>
                                             </div>  
                                         
                                             <h6>TOTAL AMOUNT TO RECIEVE - <b> Exchange Charge:<?php echo $se4.'%'; ?></b></h6>
                                            
										
										 <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-paypal"></i></span>
    <input type="text" name="btc" id='ooys' value='0.00'  
										class="" readonly >
										</div>
									<br>
                                        
                                                <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-exchange"></i></span> <select style='height:50px;' name='cash'  class="form-control" >
                                                <option>CASH</option>
                                                 <option>BTC</option>
                                                  <option>LTC</option>
                                                   <option>ETH</option>
                                      </select>
                                           </div>
												<div class="clearfix"></div> 							
										<p>
                                   <center> <button type="submit"  name="invest" 
									class="alert alert-info"><i class='fa fa-exchange'></i> Continue </button></center>
									
                                </p>
                                    
										</form>
									</div></div>