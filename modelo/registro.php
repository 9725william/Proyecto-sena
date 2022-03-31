<?php

class registro {

    private $NºDocumento;
    private $Nombres;
    private $Apellidos;
    private $Direccion;
    private $celular;
    private $Correo;
    private $pais;
    private $Departamento;
    private $Ciudad;
    private $Contraseña;
    private $Cfcontraseña;

    public function consultaNit($NºDocumento) {
        $this->NºDocumento = $NºDocumento;
    }

    public function __construct() {
        $this->NºDocumento = "";
        $this->Nombres = "";
        $this->Apellidos = "";
        $this->Direccion = "";
        $this->celular = "";
        $this->Correo = "";
        $this->pais = "";
        $this->Departamento = "";
        $this->Ciudad = "";
        $this->Contraseña = "";
        $this->Cfcontraseña = "";
    }

    public function registro($NºDocumento, $Nombres, $Apellidos, $Direccion, $celular,
            $Correo, $pais, $Departamento, $Ciudad, $Contraseña, $Cfcontraseña) {
        $this->NºDocumento = $NºDocumento;
        $this->Nombres = $Nombres;
        $this->Apellidos = $Apellidos;
        $this->Dirección = $Direccion;
        $this->celular = $celular;
        $this->Correo = $Correo;
        $this->pais = $pais;
        $this->Departamento = $Departamento;
        $this->Ciudad = $Ciudad;
        $this->Contraseña = $Contraseña;
        $this->Cfcontraseña = $Cfcontraseña;
    }

    public function getNºDocumento() {
        return $this->NºDocumento;
    }

    public function getNombres() {
        return $this->Nombres;
    }

    public function getApellidos() {
        return $this->Apellidos;
    }

    public function getDirección() {
        return $this->Dirección;
    }

    public function getcelular() {
        return $this->celular;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getpais() {
        return $this->pais;
    }

    public function getDepartamento() {
        return $this->Departamento;
    }

    public function getCiudad() {
        return $this->Ciudad;
    }

    public function getContraseña() {
        return $this->Contraseña;
    }

    public function getCfcontraseña() {
        return $this->Cfcontraseña;
    }

}
