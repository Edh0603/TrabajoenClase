<?php

include("conec/con_db.php");
if(!empty($_POST["register"])) {
    if (empty($_POST["correo"]) and empty($_POST["Password"])) {
        ?> 
	    	<h3 class="bad">Los campos estan vacios</h3>
        <?php
    } else {
        $correo = $_POST["correo"];
        $clave = base64_encode($_POST["pass"]);
        $sql = $conex->query("select * from user where correo='$correo'");
        if($sql->num_rows>0){
            while($row = $sql->fetch_assoc()){
            if($row['pass'] == ($clave)){
                setcookie('id',$row['id'], time() + (86400 * 30), "/");
                header("refresh:1;url=views/inicio.php");
            }}
            }else {
                ?> 
	        	<h3 class="bad">ACCESO DENEGADO</h3>
               <?php
            } 
    }
    
}

?>