$(document).ready(function() {
    $('#spi').hide();
$("#submit").click(function() {
     $('#submit').fadeOut();
     $('#spi').show();
var name = $("#name").val(); var ref = $("#ref").val();
var email = $("#email").val();
var wallet = $("#wallet").val();

var gender = $("input[type=radio]:checked").val();
var passwor = $("#passwor").val();
if (name == '' || email == '' || wallet == '' || gender == '' || passwor == '' ) {
alert("Insertion Failed Some Fields are Blank....!!");
 $('#spi').hide();  $('#submit').fadeIn();

} else {
   
// Returns successful data submission message when the entered information is stored in database.
$.post("process.php", {
name1: name,
ref1: ref,
email1: email,
wallet1: wallet,

gender1: gender,
passwor1: passwor
}, function(data) {
	$('#contact_form').html("<div id='message'></div>");
      $('#message').html("<h2 id='m1'>Wait! , Processing...</h2>")
      .append("<p id='m2'>Fetching Result...</p>")
      .hide()
      .fadeIn(1500, function() {
        $('#message').append(data);
		$('#m1').fadeOut(1000); $('#m2').hide(1000);
      });
	  
        
      

$('#form')[0].reset(); // To reset form fields
});
}
});
});