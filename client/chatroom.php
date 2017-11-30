 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
$("#chat").load("chat.php");
var refreshId = setInterval(function() {
      $("#chat").load('chat.php?randval='+ Math.random());
   }, 3000);
   $.ajaxSetup({ cache: false });
});
</script>
<script>
$(document).ready(function() {
$("#subm").click(function() {
var name = $("#name").val();
var email = $("#ip").val();
var contact = $("#date").val();
var msg = $("#txt").val();
if (name == '' || email == '' || contact == ''  || msg == '') {
alert(" Some Fields are Blank...!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refresh.php", {
name1: name,
email1: email,
contact1: contact,
msg1: msg
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});
</script>
<div class="content">
				<div class="container-fluid">
				<div class="row"> 
				<div class="col-lg-12 col-md-12 col-sm-12">  
<a href=''><button type="button" name="sub" id='sub' class="btn btn-success btn-fill btn-wd">

<i class='fa fa-refresh'></i> refresh</button></a><br>
    
    <div id='divi'></div>
<center><div id='' class='' style='width:50%; border-top:1px solid blue; background-color:white; border-radius:5px; '>
    <label>SAy SoMeThiNg</label>
<form id='form' name='form'>
 
<textarea style='border:none; background-color:white; border-bottom:1px solid blue;'   class="form-control border-input" 
placeholder="BUZZ THE ROOM
" name="txt" id='txt' required></textarea>
 <br><input type='text' id='name' value='<?php echo $fn;  ?>' hidden >
 <input type='text' id='ip' value='<?php $ip= $_SERVER["REMOTE_ADDR"]; echo $ip;  ?>' hidden >
 <input type='text' id='date' value='<?php $date=date('Y-m-d h:i:s a'); echo $date;  ?>' hidden >
 <button type="button" name="submit" id='subm' class="btn btn-danger btn-fill btn-wd"><i class='fa fa-comments'></i> Connect
 </button></form> </div></center>
 
 
    
<div id='chat'></div>
                                           
                    </div>   
      </div>
      </div>
      
       </div>   
      
 