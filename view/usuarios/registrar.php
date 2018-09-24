<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="../../assets/css/registrar.css">
</head>
<body>
	<div class="registrar">
		<h1>Registrarse</h1>
		<form action="../../controller/usuarios/guardar.php" method="POST" id="form">
			<div>
				<input type="number" name="id" id="txtid" value="<?php echo isset($id) ? $id : "0"; ?>" hidden>
			</div>
			<div>
				<label for="txtnombre">Nombre</label>
				<input type="text" name="nombre" id="txtnombre" required placeholder="Ingresar nombre" value="<?php echo isset($id) ? $row[1] : ""; ?>">
			</div>
			<div>
				<label for="txtapellido">Apellido</label>
				<input type="text" name="apellido" id="txtapellido"  required placeholder="Ingresar apellido" value="<?php echo isset($id) ? $row[2] : ""; ?>">
			</div>
			<div>
				<label for="txtusuario">Usuario</label>
				<input type="text" name="usuario" id="txtusuario"  required placeholder="Ingresar usuario" value="<?php echo isset($id) ? $row[3] : ""; ?>">
			</div>
			<div>
				<label for="txtpassword">Contraseña</label>
				<input type="password" name="password" id="txtpassword"  required placeholder="Ingresar contraseña" value="<?php echo isset($id) ? $row[4] : ""; ?>"><br>
			</div>
			<div>
				<input type="submit" name="aceptar" value="Aceptar">
			</div>
		</form>
	</div>
</body>
</html>