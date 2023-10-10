<?php 
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1) {
		if (($_POST['pass']) == ($_POST['passr']) ) {
	    $name = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$password = trim($_POST['pass']);
		$passwordr = trim($_POST['passr']);
		$consulta = "INSERT INTO user(nombre, apellido, correo, pass) VALUES ('$name','$apellido','$correo', '$password')";
	    $resultado = mysqli_query($conex,$consulta);
		if ($resultado){
			header("refresh:3;url=./index.php");?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>

           <?php
		   
		}  else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
	}	else{
		?> 
	    <h3 class="bad">¡Las contrasenas no coinciden!</h3>
        <?php
	}
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
	
}

?>