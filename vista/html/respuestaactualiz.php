<?php
require_once 'vista/html/acdmin.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Respuesta</title>
        <link rel="stylesheet" href="vista/css/Eliminarusuario.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">

    </head>
    <body><section class="form-register">
            <div>
                <h1>Actualizar Datos</h1>
                <form id="frmconsultar" action="index.php?accion=actualizacion" method="post">
                    <?php
                    if ($result->num_rows > 0) {
                        ?>

                        <table  class="controls">

                            <?php
                            while ($fila = $result->fetch_object()) {
                                ?>
                                <tr><th>NºDocumento</th><td class="controls"><input type="text" name="actnit" id="actnit" value="<?php echo $fila->NºDocumento; ?>"></td></tr>
                                <tr><th>Nombres</th><td class="controls"><input type="text" name="actnombres" id="actnombres" value="<?php echo $fila->Nombres; ?>"></td></tr>
                                <tr><th>Apellidos</th><td class="controls"><input type="text" name="actapellidos" id="actapellidos" value="<?php echo $fila->Apellidos; ?>"></td></tr>
                                <tr><th>Direccion</th><td class="controls"><input type="text" name="actdireccion" id="actdireccion" value="<?php echo $fila->Direccion; ?>"></td></tr>
                                <tr><th>Celular</th><td class="controls"><input type="text" name="actcelular" id="actcelular" value="<?php echo $fila->Celular; ?>"></td></tr>
                                <tr><th>Correo</th><td class="controls"><input type="text" name="actcorreo" id="actcorreo" value="<?php echo $fila->Correo; ?>"></td></tr>
                                <tr><th>Pais</th><td class="controls"><input type="text" name="actpais" id="actpais" value="<?php echo $fila->pais; ?>"></td></tr>
                                <tr><th>Departamento</th><td class="controls"><input type="text" name="actdepart" id="actdepart" value="<?php echo $fila->Departamento; ?>"></td></tr>
                                <tr><th>Ciudad</th><td class="controls"><input type="text" name="actciudad" id="actciudad" value="<?php echo $fila->Ciudad; ?>"></td></tr>
                                <tr><th>Contraseña</th><td class="controls"><input type="text" name="actcontraseña" id="actcontraseña" value="<?php echo $fila->Contraseña; ?>"></td></tr>
                                <tr><th>Cfcontraseña</th><td class="controls"><input type="text" name="actena" id="actena" value="<?php echo $fila->Cfcontraseña; ?>"></td></tr>
                                <tr><td><input class="botons" type="submit" name="registroenviar" value="Actualizar" id="resEnviar"></td><br>

                                <?php
                            }
                            ?>
                        </table>
                        <?php
                    } else {
                        ?>
                        <p>El NO docuemnto esta mal o el  NO existe el NºDocumento</p>
                        <?php
                    }
                    ?>
                </form>
            </div>
    </body>
</html>