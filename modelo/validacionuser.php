<?php

require_once 'modelo/conexionDB.php';

class validacionuser {

    public function conuser($Correo) {
        $conexion = new ConexionDB();
        $conexion->abrir();
        $sql = "SELECT * FROM registro WHERE Cfcontraseña=$Cfcontraseña";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

}
