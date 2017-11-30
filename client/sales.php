<script type="text/javascript">
function add_number(){											 
var first_number = <?php echo $se4; ?>;
            var second_number = parseInt(document.getElementById("dols").value);
            var result = second_number * first_number / 100 ;
            var rss = result + second_number ;
			
            document.getElementById("ooy").value = rss;    
            
}
</script>
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12" >
				
							<div class="card card-stats">
							
									
				 
                            <div class="panel-body" style=''>
                             <form method='post' action='?transact' >
										    <div class="col-md-12">
											 
                                           <div class="panel-footer back-footer-blue" style="background:#069; color:linen;">										
										<h4><i class='fa fa-credit-card '></i> Enter crypto amount you are sending for the exchange in($)</h4>
</div>	
                                        </div>
									
										<div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <input type="number" class="form-control"
												style='' id='dols' onKeyup="add_number()" 
												placeholder="Enter Amount In Dollar" name="btc"  required >
                                            </div>
                                        
										</div>
										 
										     Exchange Charges:<?php echo $se4.'%'; ?><br>			
										     <span><b>Amount To Pay In USD: <h3 id='atp'></h3></b></span>
										     
										   
                                         <div class="col-md-4">
                                            <div class="form-group">
										<input type="text" id='ooy'  
										class="form-control" readonly=''>
										</div></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               
                                                <select style='height:50px;' name='cur'  class="form-control" >
                                                <option>BTC</option>
                                                <option>LTC</option>
                                                <option>ETH</option></select>
                                            </div>
                                        </div>
												<div class="clearfix"></div> 							
										<p>
                                    <button type="submit"  name="invest" 
									class="alert alert-info"><i class='fa fa-exchange'></i> Buy Crypto</button>
									
                                </p>
                                    
										</form>
									</div></div></div></div></div></div>