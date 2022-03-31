<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>consultar usuario</title>
        <script src="https://kit.fontawesome.com/a27ea3be09.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/consultarusuario.css">
         <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
    </head>
    <body>
        
        <section class="form-register">
            <h1>consultar cliente</h1> 
            
            <form id="frmconsultar" action="../../index.php?accion=buscar" method="post"  >
                <table >
                    <tr><td>$NºDocumento</td><td><input class="controls" type="tex" name="consultarnit" id="consultarnit"></td></tr>
                    <tr><td><input class="botons" type="submit" name="registroenviar" value="Consultar" id="resEnviar"></td><br>
                    <td><input class="botons" type="reset" value="limpiar"></td></tr>
                <tr><td><a href="acdmin.php" class="botons"><i class="fas fa-door-open"></i>volver</td></tr>

                </table>

            </form>
    </body>
</html>
