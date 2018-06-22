<?php 
//importamos el modulo de usuario
require '../modelo/m_tusuario.php';

//instanciamos el objeto
$oUser = new user();

//enviamos los datos recibidos al modulo
$oUser->usuario = $_POST['user'];

//realizamos la consulta del usuario
$oUser->selectUser();

//creamos el arreglo
if ($row = $oUser->row()) {
	//definimos variables para mejor manejo de datos
	$user = $row['usuario'];
	$pass = $row['clave'];
	$perfil = $row['perfiles'];
	$departa = $row['departamento'];
	$blockUser = $row['bloqueado'];
	$primerIni = $row['primer_inicio'];
	$intFallidos = $row['intentos_fallidos'];

	//hacemos la validacion de los datos del usuario
	if ($user == $_POST['user'] and $pass == $_POST['pass']) {
		//validamos el estado de bloqueo del usuario para mostrar una notificacion
		//al usuario en pantalla
		
		$oUser->intentos_fallidos = 0; // enviamos el valor (0) a intentos fallidos
		$oUser->updateUserInt(); // reseteamos los intentos fallidos a (0)

		if ($blockUser == 0) { // (0) no esta bloqueado
			$oUser->inicio_sesion = 1;
			$oUser->updateUserIniSesion();
			session_start(); 
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			$_SESSION['perfil'] = $perfil;
			$_SESSION['departa'] = $departa;
			$_SESSION['inisesion'] = 1;
			$_SESSION['primerIni'] = $primerIni;
			echo 0;
		} else if ($blockUser == 1) { // (1) esta bloqueado temporalmente
			echo 1;
		} else if ($blockUser == 2) { // (3) esta bloqueado definitivamente
			echo 2;
		}
		
	} else{
		if ($intFallidos == 3) {
			$oUser->bloqueado = 1;
			$oUser->updateUserBlock();
			echo 4; // notificamos al usuario que se ha bloqueado
		} else{
			if ($blockUser == 2) {
				echo 2;
			} else{
				echo 3; // (3) usuario o clave incorrectos
				$intFallidos = $intFallidos + 1; // hacemos un contador de intentos
				$oUser->intentos_fallidos = $intFallidos; // enviamos el valor a intentos fallidos
				$oUser->updateUserInt(); //modificamos cada intento fallido del usuario
			}
		}
	}
} else{
	echo false;
}
?>
