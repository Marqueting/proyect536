$(document).ready(function() {

	$('#responder').click(function(e) {
		
		$.ajax({
			url: '../control/answerQuestions.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			$('#info').html("Espere un momento...");
			setTimeout(function() {
					location = "../pages/recoverPw2.php";
			}, 1000);
		})
		.fail(function() {  //false
			$('#info').html('Ha respondido de forma incorrecta, por seguridad su usuario se ha bloqueado, contacte con el jefe del departamento');
			setTimeout(function() {
				location = "../pages/sesion.php";
			}, 8000);
		})
		.always(function() {
			setTimeout(function() {
				$('#info').html("");
			}, 7000);
		});
		
	})
})