//FORM UITSLAG
$("#logform").submit(function(e) {
	"use strict";
	$.ajax({
		type: "POST",
		url: "login.php",
		data: $("#logform").serialize(),
		success: function(data){
			$(".uitslagForm").html(data);
			document.getElementById("logform").reset();
			$('#verzoekhide').hide();
		}
	});
	e.preventDefault();
});