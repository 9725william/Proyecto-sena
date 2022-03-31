<?php

class pedidos1 {

    private $Nombre;
    private $Apellido;
    private $Correo;
    private $Barrio;
    private $Direccion;
    private $Celular;
    private $Menu;
    private $platos;
    private $observaciones;
    
    
 public function conspedido($Menu){
      $this->Menu=$Menu;

 }
    public function __construct() {
        $this->Nombre = "";
        $this->Apellido = "";
        $this->Correo = "";
        $this->Barrio = "";
        $this->Direccion = "";
        $this->Celular = "";
        $this->Menu = "";
        $this->platos = "";
        $this->observaciones = "";
    }

    public function pedidos1($Nombre, $Apellido, $Correo, $Barrio, $Direccion, $Celular, $Menu, $platos, $observaciones) {
        $this->Nombre =$Nombre;
        $this->Apellido = $Apellido;
        $this->Correo = $Correo;
        $this->Barrio = $Barrio;
        $this->Direccion = $Direccion;
        $this->Celular= $Celular;
        $this->Menu = $Menu;
        $this->platos = $platos;
        $this->observaciones = $observaciones;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getApellido() {
        return $this->Apellido;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getBarrio() {
        return $this->Barrio;
    }

    public function getDireccion() {
    return $this->Direccion;
    }

    public function getCelular() {
        return $this->Celular;
    }

    public function getMenu() {
        return $this->Menu;
    }
    public function getplatos() {
        return $this->platos;
    }
    public function getobservaciones() {
        return $this->observaciones;
    }

}
