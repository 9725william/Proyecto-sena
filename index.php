<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>resultado</title>
    </head>
    <body>
        <?php
        if (isset($_GET["accion"])) {
            if ($_GET["accion"] == "registrar") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "buscar") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "eliminar") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "registrar1") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "ingresar") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "buscar1") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "actualizar") {
                require_once 'controlador/control.php';
            } elseif ($_GET["accion"] == "actualizacion") {
                require_once 'controlador/control.php';
            } else {
                print("no llego");
            }
        } else {
             header('location:vista/html/index.php');
        }
        
        ?>
    </body>
</html>
