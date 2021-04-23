<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>{{ e($usuario["id_usuario"]) }} {{e($usuario["nombre"]) }}</div>
	<form method="post" action="">
		<label>Email: </label>
		<input type="email" name="email" >
		<label>Contraseña: </label>
		<input type="password" name="clave" >
		<input type="submit" value="Aceptar">	
	</form>

</body>
</html>