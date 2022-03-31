<?php

require_once 'modelo/registro.php';
require_once 'modelo/registroUsuario.php';
require_once 'modelo/pedidos1.php';
require_once 'modelo/registropedido.php';
require_once 'modelo/sesion.php';

if (isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Correo']) && isset($_POST['Barrio']) && isset($_POST['Direccion']) && isset($_POST['Celular']) && isset($_POST['Menu'])&& isset($_POST['platos'])&& isset($_POST['observaciones'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST ['Apellido'];
    $Correo = $_POST ['Correo'];
    $Barrio = $_POST ['Barrio'];
    $Direccion = $_POST ['Direccion'];
    $Celular = $_POST['Celular'];
    $Menu = $_POST['Menu'];
    $platos = $_POST['platos'];
    $observaciones = $_POST['observaciones'];
    $usuario = new pedidos1();
    $usuario->pedidos1($Nombre, $Apellido, $Correo, $Barrio, $Direccion, $Celular, $Menu, $platos, $observaciones);
    $perusuario = new registropedido();
    $perusuario->regpedido($usuario);
} elseif (isset($_POST['conspedido'])) {

    try {
        $Menu = $_POST['conspedido'];
        $usuario = new pedidos1();
        $usuario->conspedido($Menu);
        $consultarpedido = new registropedido();
        $result = $consultarpedido->conspedido(($Menu));
        require_once 'vista/html/respuestapedido.php';
    } catch (Exception $ex) {
        echo $ecx->getMessage();
    }
}
if (isset($_POST['registrodocumento']) && isset($_POST['registronombres']) && isset($_POST['registroapellido']) && isset($_POST['registrodireccion']) && isset($_POST['registrocelular']) && isset($_POST['registrocorreo']) && isset($_POST['registropais']) && isset($_POST['registrodep']) && isset($_POST['registrociudad']) && isset($_POST['registrocontraseña']) && isset($_POST['registrocfcontraseña'])) {

    $NºDocumento = $_POST['registrodocumento'];
    $Nombres = $_POST['registronombres'];
    $Apellidos = $_POST['registroapellido'];
    $Direccion = $_POST['registrodireccion'];
    $celular = $_POST['registrocelular'];
    $correo = $_POST['registrocorreo'];
    $pais = $_POST['registropais'];
    $Departamento = $_POST['registrodep'];
    $Ciudad = $_POST['registrociudad'];
    $Contraseña = $_POST['registrocontraseña'];
    $Cfcontraseña = $_POST['registrocfcontraseña'];
    $usuario = new registro();
    $usuario->registro($NºDocumento, $Nombres, $Apellidos, $Direccion, $celular, $correo, $pais, $Departamento, $Ciudad, $Contraseña, $Cfcontraseña);
    $perusuario = new registroUsuario();
    $perusuario->regusuario($usuario);
} elseif (isset($_POST['consultarnit'])) {

    try {
        $NºDocumento = $_POST['consultarnit'];
        $perusuario = new registro();
        $perusuario->consultaNit($NºDocumento);
        $consultarUsuario = new registroUsuario();
        $result = $consultarUsuario->conClientes($NºDocumento);
        require_once 'vista/html/respuestaConsulta.php';
    } catch (Exception $ex) {
        echo $ecx->getMessage();
    }
} elseif (isset($_POST['eliminarnit'])) {
    try {
        $NºDocumento = $_POST['eliminarnit'];
        $perusuario = new registro();
        $perusuario->consultaNit($NºDocumento);
        $elicliente = new registroUsuario();
        $result = $elicliente->eliminarClientes($NºDocumento);
    } catch (Exception $ex) {
        echo $ecx->getMessage();
    }
} elseif (isset($_POST['actualizarnit'])) {

    try {
        $NºDocumento = $_POST['actualizarnit'];
        $perusuario = new registro();
        $perusuario->consultaNit($NºDocumento);
        $consultarUsuario = new registroUsuario();
        $result = $consultarUsuario->conClientes($NºDocumento);
        require_once 'vista/html/respuestaactualiz.php';
    } catch (Exception $ex) {
        echo 'Error' . $ex;
    }
} elseif (isset($_POST['actnit'])) {

    try {
        $NºDocumento = $_POST['actnit'];
        $Nombres = $_POST['actnombres'];
        $Apellidos = $_POST['actapellidos'];
        $Direccion = $_POST['actdireccion'];
        $celular = $_POST['actcelular'];
        $correo = $_POST['actcorreo'];
        $pais = $_POST['actpais'];
        $Departamento = $_POST['actdepart'];
        $Ciudad = $_POST['actciudad'];
        $Contraseña = $_POST['actcontraseña'];
        $Cfcontraseña = $_POST['actena'];
        $usuario = new registro();
        $usuario->registro($NºDocumento, $Nombres, $Apellidos, $Direccion, $celular, $correo, $pais, $Departamento, $Ciudad, $Contraseña, $Cfcontraseña);
        $perusuario = new registroUsuario();
        $perusuario->actusuarios($usuario);
    } catch (Exception $ex) {
        echo 'Error' . $ex;
    }
} elseif (!empty($_POST['Correo']) && !empty($_POST['Contraseña'])) {

    try {
        $Correo = $_POST['Correo'];
        $Contraseña = $_POST['Contraseña'];
        $usuario = new sesion();
        $usuario->sesion($Correo, $Contraseña);
        $consultuser = new registroUsuario();
        $result = $consultuser->conuser($usuario->getCorreo());
        $fil = $result->fetch_object();
        
        if ($fil -> rol =="administrador" ) {
             // Aqui validamos que la contraseña que digita el usuario sea la misma que esta en la BD
            if (($fil->Contraseña) == $Contraseña) {
                // pagina donde se enviará al usuario si la validacion es correcta
                // aqui iniciamos sesion con session_start
               // session_start();
                $_SESSION ['usuario'] = $_POST ['Contraseña'];
                require_once 'vista/html/acdmin.php';
            } else {
                echo 'Usuario o contraseña inválidos';
            }
        }else {
                if (($fil->Contraseña) == $Contraseña) {
                // pagina donde se enviará al usuario si la validacion es correcta
                // aqui iniciamos sesion con session_start
               // session_start();
                $_SESSION ['usuario'] = $_POST ['Contraseña'];
                require_once 'vista/html/pedidos.php';
            } else {
                echo 'Usuario o contraseña inválidos';
            }
        }
    } catch (Exception $ex) {
        echo 'Error en el servidor';
    }
} else {
    //echo 'Debe llenar todos los campos';
}
