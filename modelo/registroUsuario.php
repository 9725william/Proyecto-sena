<?php

require_once 'modelo/conexionBD.php';

class registroUsuario {

    public function regusuario(registro $regusuario) {
        try {
            $conexion = new conexionBD();
            $conexion->abrir();
            $NºDocumento = $regusuario->getNºDocumento();
            $Nombres = $regusuario->getNombres();
            $Apellidos = $regusuario->getApellidos();
            $Direccion = $regusuario->getDirección();
            $celular = $regusuario->getcelular();
            $Correo = $regusuario->getCorreo();
            $pais = $regusuario->getpais();
            $Departamento = $regusuario->getDepartamento();
            $Ciudad = $regusuario->getCiudad();
            $Contraseña = $regusuario->getContraseña();
            //encrpitamiento de contraseña
            $Contraseña= hash('sha512',$Contraseña);
            $Cfcontraseña = $regusuario->getCfcontraseña();
            $Contraseña= hash('sha512',$Cfcontraseña);
            $sql = "INSERT INTO registro VALUES('$NºDocumento','$Nombres','$Apellidos','$Direccion','$celular','$Correo','$pais','$Departamento','$Ciudad','$Contraseña','$Cfcontraseña')";
            $conexion->consulta($sql);
            print'usuario registrado';
            
            $conexion->cerrar();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function conClientes($NºDocumento) {
        $conexion = new conexionBD();
        $conexion->abrir();
        $sql = "select * from registro where NºDocumento =$NºDocumento";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function eliminarClientes($NºDocumento) {
        $conexion = new conexionBD();
        $conexion->abrir();
        $sql = "delete from registro where NºDocumento =$NºDocumento";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        if ($result != $NºDocumento) {
            echo 'Registro eliminado';
        } else {
            echo 'Registro eliminado';
        }
        $conexion->cerrar();
        return $result;
    }

    public function actusuarios(registro $regusuario) {

        try {

            $conexion = new conexionBD();
            $conexion->abrir();
            $NºDocumento = $regusuario->getNºDocumento();
            $Nombres = $regusuario->getNombres();
            $Apellidos = $regusuario->getApellidos();
            $Direccion = $regusuario->getDirección();
            $celular = $regusuario->getcelular();
            $Correo = $regusuario->getCorreo();
            $pais = $regusuario->getpais();
            $Departamento = $regusuario->getDepartamento();
            $Ciudad = $regusuario->getCiudad();
            $Contraseña = $regusuario->getContraseña();
            $Cfcontraseña = $regusuario->getCfcontraseña();
            $sql = "UPDATE registro SET NºDocumento='$NºDocumento', Nombres='$Nombres',Apellidos='$Apellidos',Direccion='$Direccion',celular='$celular',Correo='$Correo',pais='$pais',Departamento='$Departamento',Ciudad='$Ciudad',Contraseña='$Contraseña',Cfcontraseña='$Cfcontraseña' "
                    . "WHERE NºDocumento='$NºDocumento'";
            $conexion->consulta($sql);
            $res = $conexion->obtenerfilasAfectadas();
            if ($res != 0) {
                print 'Registro modificado';
            } else {
                print 'No se encontro el  Registro';
            }
            $conexion->cerrar();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function conuser($Correo) {
        $conexion = new conexionBD();
        $conexion->abrir();
        $sql = "SELECT * FROM sesion WHERE Correo='$Correo'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

}
