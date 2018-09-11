<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
include "conexion.php";
$conexion=new conexion();
$link=$conex->conectarse();
$query="INSERT INTO usuarios VALUES ($id,'$nombre','$usuario', '$password')";
$sql=mysql_query($query, $link) or die (mysql_error());
if($sql){
	echo "Se registro correctamente la persona";
}else
echo "Error al registrar persona";
header('Location: registrar.php');
?>