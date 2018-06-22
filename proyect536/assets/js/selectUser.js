$(document).ready(function() {
		$('#info-danger').hide();
		//$('#info-success').hide();
	$('#entrar').click(function(e) {
		
		$.ajax({
			url: '../control/selectUser.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r; // pasamos a la variable el resultado de la validacion
			if (valid == 0) { // todo va bien
				$('#info').html("Entrando al sistema");
				setTimeout(function() {
					location = "../control/validationDepartment.php";
				}, 2000);
			} else if (valid == 1) { // bloqueo temporal
				$('#info').html("Usuario bloqueado");
			} else if (valid == 2) { // bloqueo definitivo
				$('#info').html("Usuario bloqueado contacte al jefe del departamento");
			} else if (valid == 3) { // Usuario o contraseña incorrecta
				$('#info').html("Usuario o contraseña incorrecta");
			} else if (valid == 4) { // Usuario bloqueado
				$('#info').html("Ha bloqueado su usuario");
			}
			//$('#info-success').show();
			//setTimeout(function() {
				//location = "../control/validationDepartment.php";
			//}, 2000);
			
		})
		.fail(function() {  //false
			$('#info').html("Error en la consulta");
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