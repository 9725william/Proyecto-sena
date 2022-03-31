<?php

require_once 'modelo/conexionBD.php';

class registropedido {

    public function regpedido(pedidos1 $regpedido) {
        try {
            $conexion = new conexionBD();
            $conexion->abrir();
            $Nombre = $regpedido->getNombre();
            $Apellido =$regpedido->getApellido();
            $Correo = $regpedido->getCorreo();
            $Barrio = $regpedido->getBarrio();
            $Direccion = $regpedido->getDireccion();
            $Celular = $regpedido->getCelular();
            $Menu = $regpedido->getMenu();
            $platos=$regpedido->getplatos();
            $observaciones=$regpedido->getobservaciones();
            $sql = "INSERT INTO pedidos1 VALUES('$Nombre','$Apellido','$Correo','$Barrio','$Direccion','$Celular','$Menu','$platos','$observaciones')";
          $conexion->consulta($sql);
            print'Tu ordenen esta en camino ';
            $conexion->cerrar();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    public function conspedido($Menu) {
        $conexion = new conexionBD();
        $conexion->abrir();
        $sql = "select * from pedidos1 where Menu = '$Menu'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }
}
