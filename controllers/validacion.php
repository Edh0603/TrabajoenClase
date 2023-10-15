<?php

include("conec/con_db.php");
if(!empty($_POST["register"])) {
    if (empty($_POST["correo"]) and empty($_POST["Password"])) {
        ?> 
	    	<h3 class="bad">Los campos estan vacios</h3>
        <?php
    } else {
        $correo = $_POST["correo"];
        $clave = $_POST["pass"];
        $sql = $conex->query("select * from user where correo='$correo' and pass='$clave'");
        if($datos=$sql->fetch_object()) {
            header("Location:inicio.php");
        }else {
            ?> 
	    	<h3 class="bad">ACCESO DENEGADO</h3>
           <?php
        } 
    }
    
}

?>