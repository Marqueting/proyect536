<?php

#=========================================
#CLASE PARA LA CONEXION A LA BASE DE DATOS
#=========================================

class bd{
	private $con;
	private $res;
	private $server;
	private $bd;
	private $user;
	private $pass;

	protected function mydb(){
		$this->server="localhost";
		$this->bd="policia";
		$this->user="root";
		$this->pass="root1234";
	}
	#conectarse a la base de datos:
	function conectar () {
		$this->con = mysql_connect('localhost','root','root1234');
		if ($this->con && mysql_select_db('policia', $this->con))
			return true;
		else
			die( "No se puede conectar a la base de datos: " . mysql_error() );
	}
	#=========================================================

	# ejecutar la consulta:
	protected function ejecutar($sql){
		$this->conectar();
		$this->res = mysql_query($sql);
		return $this->res;
	}
	#=========================================================
	# resultado del Query:
	public function row(){
		return mysql_fetch_array($this->res);
	}
	#================================================================
	
	# cierre de la conexion:
	protected function cerrar(){
		return mysql_close($this->con);
	}
	#================================================================
}
?>