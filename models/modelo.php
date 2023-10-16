<?php

class Usuario {
    public $nombre;
    public $apellido;
    public $correo;
    public $contraseña;

  function __construct($nom, $apell, $corr, $cont) 
  {
    $this->nombre = $nom;
    $this->apellido = $apell;
    $this->correo = $corr;
    $this->contraseña = $cont;
  }
  
}

?>