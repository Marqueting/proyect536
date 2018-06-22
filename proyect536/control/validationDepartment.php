<?php 

session_start(); // creamos la sesion de usuario

if ($_SESSION['inisesion'] == 0) {
  header('location:../pages/sesion.php');
  die();
} else if ($_SESSION['inisesion'] == 1) {
	if ($_SESSION['primerIni'] == 1) {
		if ($_SESSION['departa'] == "EVIDENCIAS FISICAS") {
			header('location:../pages/evidencias.php');
		} else if ($_SESSION['departa'] == "EVALUACION Y MERITO") {
			header('location:../pages/homeEym.php');
		}
	} else if ($_SESSION['primerIni'] == 0) {
		header('location:../pages/updatePass.php');
	}
}
?>