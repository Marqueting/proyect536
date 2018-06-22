$(document).ready(function() {
	$('#info-danger').hide();
	$('#info-success').hide();
	$('#cambiar').click(function(e) {
		
		$.ajax({
			url: '../control/newPass.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r; // pasamos a la variable el resultado de la validacion
			if (valid == 1) { // todo va bien
				$('#info').html("Cambio de contraseña exitoso");
				setTimeout(function() {
					location = "../pages/sesion.php";
				}, 2000);
			} else if (valid == 0) {
				alert(valid);
			}
			
		})
		.fail(function() {  //false
			$('#info').html("Ha ocurrido un error");
			//$('#info-danger').show();
		})
		.always(function() {
			setTimeout(function() {
				$('#info').html("");
				//$('#info-danger').hide();
				//$('#info-success').hide();
			}, 4000);
		});
		
	})
})