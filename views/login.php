<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Login</h1>
    	<input type="email" name="correo" placeholder="Correo">
		<input type="password" name="pass" placeholder="Password">
        <input type="submit" name="register" value="Iniciar Sesion">
		<br>
		<br>
        <label>Registro de usuario <a href="?op=crear">Click Aqui!</a></label>
    </form>

	<?php
	include("controllers/validacion.php");	
	?>

</body>
</html>
