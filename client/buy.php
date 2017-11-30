<script type="text/javascript">
function add_number2(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dols").value);
            var result = second_number * first_number / 100 ;
            var rss = result + second_number + 2 ;
			
            document.getElementById("ooy").value = rss;    
            
}
</script>


				<div class="col-lg-12 col-md-12 col-sm-12" >
				
							
							<div class="col-md-12">
											 
                                           <div class="alert alert-warning" >										
										<h4><i class='fa fa-credit-card '></i> BUY BTC,ETH,LTC IN EXCHANGE WITH CASH</h4>
</div>	
                                        </div>
									
				 
                            <div class="panel-body" style=''>
                             <form method='post' action='?makepay' >
										    
									
										
                                            
                                                <span>Amount To Pay In USD: <h3 id='atp'></h3></span>
                                               <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-dollar"></i></span> <input type="text" class=""
												style='' id='dols' onKeyup="add_number2()" 
												placeholder="Enter Amount In Dollar" name="btc"  required ></div>
                                           <br>
                                       
										 <div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-exchange"></i></span><select style='height:50px;' name='cur'  class="" >
                                                <option>BTC</option>
                                                <option>LTC</option>
                                                <option>ETH</option></select>
                                           </div>
                                           <br><b>
										     Exchange Charge:<?php echo $se4.'%'; ?>	 -- Paypal Charge:$2		
										     
										     
										   </b>
                                         <br>
									<div class="input-group" >
    <span class="input-group-addon" style='background:linen;'><i class="fa fa-money"></i></span>	<input type="text" name='ooy' id='ooy'  
										class="" readonly=''></div>
									
                                          
                                               
                                                
												<div class="clearfix"></div> 							
										<p><br>
                                    <center><button type="submit"  name="invest" 
									class="alert alert-warning"><i class='fa fa-paypal'></i> Continue</button></center>
									
                                </p>
                                    
										</form>
									</div></div>