<?php


class Controller
{

    public function index(){

        require("views/login.php");

    }

    public function registro(){

        require("views/registro.php");

    }

    public static function login(){
        require("views/inicio.php");
    }

}



?>