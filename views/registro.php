<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Formulario del Registro</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="email" name="correo" placeholder="Correo">
		<input type="password" name="pass" placeholder="Password">
		<input type="password" name="passr" placeholder="Repetir Password">
    	<input type="submit" name="register" value="Registrar">
		<br>
        <br>
        <label >Para regresar al login <a href="?op=login">Click Aqui!</a></label>
    </form>
    
	<h3>Edson Hervey |	8-992-1483 	 |	1LS131</h3>
        <?php 
        include("<controllers/registrar.php");
        ?>
</body>
</html>