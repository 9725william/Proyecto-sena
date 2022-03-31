<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar usuario</title>
        <script src="https://kit.fontawesome.com/a27ea3be09.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/Eliminarusuario.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
    </head>
    <body> 



        <section class="form-register">
            <h1>Eliminar Usuario</h1> 

            <form name="frmeliminar" id="frmeliminar" action="../../index.php?accion=eliminar"  method="post"  >
                <table >
                    <tr><td>NºDocumento</td><td><input class="controls" type="tex" name="eliminarnit" id="eliminarnit"></td></tr>

                    <tr><td><input class="botons" type="submit" name="registroenviar" value="Eliminar" id="resEnviar"></td><br>
                    <td><input class="botons" type="reset" value="limpiar"></td></tr>
                    <tr><td><a href="inicio_de_sesion.php" class="botons"><i class="fas fa-door-open"></i>Cerrar</td></tr>

                </table>

            </form>
    </body>
</html>
