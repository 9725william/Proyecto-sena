<?php

class sesion {
    private $Correo;
    private $Contraseña;

    public function __construct() {
        $this->Correo = "";
        $this->Contraseña = "";
    }

    public function sesion($Correo,$Contraseña){
        $this->Correo =$Correo;
        $this->Contraseña =$Contraseña;
    }
    public function getCorreo() {
         return $this->Correo;
    }
    public function getContraseña() {
        return $this->Contraseña;
    }
    
}
