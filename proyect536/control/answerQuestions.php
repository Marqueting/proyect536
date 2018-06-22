<?php 

session_start();

$r1 = trim(strtoupper($_POST['r1']));
$r2 = trim(strtoupper($_POST['r2']));

//validar respuestas del usuario
if ($r1 == $_SESSION['respuesta1'] and $r2 == $_SESSION['respuesta2']) {
	echo true;
} else{
	echo false;
}

?>