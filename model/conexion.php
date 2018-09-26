<?php
error_reporting(E_ALL ^ E_DEPRECATED);
Class conexion{

	function conectarse(){
		$link= new mysqli("localhost","root","","usuarios");
		
		if ($link->connect_error)
			echo "Error seleccionando la base de datos.";
		return $link;
	}
}