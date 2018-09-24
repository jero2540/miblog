<?php
include "../../model/usuarios.php";
$usuario=new Usuario();
$usuario->id=$_POST['id'];
$usuario->nombre=$_POST['nombre'];
$usuario->apellido=$_POST['apellido'];
$usuario->usuario=$_POST['usuario'];
$usuario->password=$_POST['password'];
$usuario->Guardar($usuario);
header('Location: ../../view/usuarios/login.html')
?>