<?php
error_reporting(E_ALL ^ E_DEPRECATED);
Class conexion{

	function conectarse(){
		if (!($link=mysql_connect("localhost","root",""))) 
		{
			echo "Error en la conexion.";
			exit();
		}
		if (!mysql_select_db("usuarios",$link))
		{
			echo "Error seleccionando la base de datos.";
			exit();
		}
		return $link;
	}
}