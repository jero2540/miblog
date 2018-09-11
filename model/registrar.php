<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="../view/css/registrar.css">
</head>
<body>
	<div class="registrar">
		<h1>Registrarse</h1>
		<form>
			<div>
				<input type="number" name="id" id="txtid" placeholder="Ingresar id" hidden>
			</div>
			<div>
				<label for="txtnombre">Nombre</label>
				<input type="text" name="nombre" id="txtnombre" placeholder="Ingresar nombre">
			</div>
			<div>
				<label for="txtapellido">Apellido</label>
				<input type="text" name="apellido" id="txtapellido" placeholder="Ingresar apellido">
			</div>
			<div>
				<label for="txtusuario">Usuario</label>
				<input type="text" name="usuario" id="txtusuario" placeholder="Ingresar usuario">
			</div>
			<div>
				<label for="txtpassword">Contraseña</label>
				<input type="password" name="password" id="txtpassword" placeholder="Ingresar contraseña"><br>
			</div>
			<div>
				<input type="submit" name="aceptar" value="Aceptar">
			</div>
		</form>
	</div>
</body>
</html>