
<?php
include "../../model/conexion.php";
$query=("SELECT * FROM registro");
$conexion = new Conexion();
$link= $conexion->conectarse();
//$row = mysqli_fetch_array($query);
$sql=$link->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mis Usuarios</title>
	<link rel="stylesheet" href="../../assets/css/menu.css">
	<style type="text/css">
	.alltable{
		margin-left: 20%;
		width: 60%;
		background-color: #EEEEEE;
	}
	#table{
		width: 100%;
		border-collapse: collapse;
		text-align: center;
	}

</style>
</head>
<body>
	<div>
		<nav class="navegar">
			<ul class="menu">
				<li><a href="cercade.html">Ha cerca de..</a></li>
				<li><a href="kardex.html">Kardex</a></li>
				<li><a href="misusuarios.php">Mis usuarios</a></li>
				<li><a href="login.html">Salir</a></li>
			</ul>
		</nav>
	</div>
	<div class="alltable">
		<table border="collapse" id="table">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Usuario</th>
				<th>Contraseña</th>
			</tr>
			<?php while ($rows = mysqli_fetch_array($sql)){  ?>
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