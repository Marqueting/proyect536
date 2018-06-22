$(document).ready(function() {

	$('#searchUser').click(function(e) {
		
		$.ajax({
			url: '../control/searchUser.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r;
			if (valid == 1) {
				$('#info').html("<i class='fas fa-search'></i> Buscando...");
				setTimeout(function() {
					location = "../pages/recoverPw.php";
			}, 1000);
			} else if (valid == 0) {
				$('#info').html('<i class="fas fa-user-lock"></i> Usuario bloqueado');
			}
		
		})
		.fail(function() {  //false
			
			$('#info').html("El usuario no existe");
		})
		.always(function() {
			setTimeout(function() {
				$('#info').html("");
			}, 3000);
		});
		
	})
})