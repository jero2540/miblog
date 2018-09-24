<?php
include "conexion.php";
Class Usuario{
	public $id;
	public $nombre;
	public $apellido;
	public $usuario;
	public $password;
	public $sql;
	public function Guardar(Usuario $usuario){
		$query="INSERT INTO registro VALUES (null,'$usuario->nombre','$usuario->apellido','$usuario->usuario', '$usuario->password')";
		$conexion= new conexion();
		$link=$conexion->conectarse();
		$row = mysql_fetch_array($query);
		$sql=mysql_query($query, $link) or die (mysql_error());
		if($sql){
			echo "Se registro correctamente la persona";
		}else
		echo "Error al registrar persona";
		header('Location:../controller/usuarios/guardar.php');
	}
	public function Validalogin($usuario, $password){
		$query="SELECT usuario, password FROM registro WHERE usuario='$usuario' AND password='$password'";
		$conexion= new conexion();
		$link=$conexion->conectarse();
		$sql=mysql_query($query, $link) or die (mysql_error());
		$num = mysql_num_rows($sql);
		 if( $num > 0 ) { 
           return 1; 
       } 
       else 
       { 
          return 0; 
       } 
  
   } 
		

}
	
?>