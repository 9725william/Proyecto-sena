<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Dato a Modificar</title>
        <script src="https://kit.fontawesome.com/a27ea3be09.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/consultarusuario.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
    </head>
    <body> 


        <section class="form-register">
            <h1>Buscar Documento a Modificar</h1> 

            <form id="frmconsultar" action="../../index.php?accion=actualizar" method="post"  >
                <table >
                    <tr><td>NºDocumento</td><td><input class="controls" type="tex" name="actualizarnit" id="actualizarnit"></td></tr>
                    <tr><td><input class="botons" type="submit" name="registroenviar" value="Consultar" id="resEnviar"></td><br>
                    <td><input class="botons" type="reset" value="limpiar"></td></tr>
                    <tr><td><a href="inicio_de_sesion.php" class="botons"><i class="fas fa-door-open"></i>Cerrar </td></tr>

                </table>
            </form>
    </body>
</html>
