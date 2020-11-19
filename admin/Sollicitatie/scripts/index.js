$(document).ready(function() {
    $("#solli-indienen-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: 'POST',
			data: $('#solli-indienen-form').serialize(),
			dataType: "html",
			url: "./sollicitatie-indien.php",
          	success: function(result){
				var jsonverzoek = JSON.parse(result);
				if(jsonverzoek.msg === true){
					swal('Sollicitatie ingediend!');
					document.getElementById('solli-indienen-form').reset();
				}
				else{
					swal('Iets ging fout, neem contact op met de beheerder of probeer het opnieuw.' + jsonverzoek.success);
				}
			}
		});
		return false;
      });
});