
<?php
include "../../model/conexion.php";
$conex = new Conexion();
$link= $conex->conectarse();
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM registro WHERE id = $id");
	$row = mysql_fetch_array($query);
}
$sql=mysql_query("SELECT * FROM registro", $link) or die (mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mis Usuarios</title>
	<link rel="stylesheet" href="../../assets/css/menu.css">
	<style type="text/css">
	.table{
		margin-left: 20%;
		width: 60%;
		background-color: #EEEEEE;
	}
	#table{
		width: 100%;
	}

</style>
</head>
<body>
	<div>
		<nav class="navegar">
			<ul class="menu">
				<li><a href="cercade.html">Ha cerca de..</a></li>
				<li><a href="../kardex/kardex.html">Kardex</a></li>
				<li><a href="misusuarios.php">Mis usuarios</a></li>
				<li><a href="login.html">Salir</a></li>
			</ul>
		</nav>
	</div>
	<div class="table">
		<table border="2" id="table">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Usuario</th>
				<th>Contraseña</th>
			</tr>
			<?php while ($rows = mysql_fetch_array($sql)){  ?>
			<tr>
				<td><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['nombre']; ?></td>
				<td><?php echo $rows['apellido']; ?></td>
				<td><?php echo $rows['usuario']; ?></td>
				<td><?php echo $rows['password']; ?></td>
			</tr>
			<?php } ?>
			<!--completar la tabla con todos los datos del formulario-->
		</table>
	</div>
</body>
</html>