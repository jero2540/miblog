<?php
include "../../model/usuarios.php";
$usuarios=new Usuario();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$usuarios->Validalogin($usuario, $password);
header('Location: ../../view/usuarios/menu.html')
?>