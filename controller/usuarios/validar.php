<?php
include "../../model/usuarios.php";
$usuarios=new Usuario();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$resultado = $usuarios->Validalogin($usuario, $password);
$num_row = $resultado->num_rows;
if($num_row > 0){
	echo "<script type='text/javascript'>
	alert('Bienvenido a mi blog');
	window.location.href='../../view/usuarios/menu.html';
	</script>";
	

}
else{
	echo "<script type='text/javascript'>
	alert('Acceso incorrecto');
	window.location.href='../../view/usuarios/login.html';
	</script>";
}

?>