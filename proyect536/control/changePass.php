<?php 
require '../modelo/m_tclave.php'; // clave del usuaario

session_start(); //creamos la sesion de usuario

//instanciamos el objetos user pass
$oUserPass = new userPass();

$oUserPass->clave_anterior = $_SESSION['pass']; // enviamos la contraseña actual
$oUserPass->clave = $_POST['pass']; // enviamos la nueva contraseña

$oUserPass->selectUserPass($_SESSION['user']); //cambiamos la cntraseña y guardamos la anterior





 ?>