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
            <h1>Resultado de la consulta</h1>
        </div>
        <div > 
            
                <?php $fila = $result->fetch_object()?>
            
            <table  border="1" class="controls">
                <tr><th colspan="2">Datos del usuario</th></tr>
                <tr><td class="controls">NºDocumento</td><td><?php echo $fila->NºDocumento;?></td></tr>
                <tr><td class="controls">Nombres</td><td><?php echo $fila->Nombres;?></td></tr>
                <tr><td class="controls">Apellidos</td><td><?php echo $fila->Apellidos;?></td></tr>
                <tr><td class="controls">Dirección</td><td><?php echo $fila->Direccion;?></td></tr>
                <tr><td class="controls">celular</td><td><?php echo $fila->Celular;?></td></tr>
                <tr><td class="controls">Correo</td><td><?php echo $fila->Correo;?></td></tr>
                <tr><td class="controls">Pais</td><td><?php echo $fila->pais;?></td></tr>
                <tr><td class="controls">Departamento</td><td><?php echo $fila->Departamento;?></td></tr>
                <tr><td class="controls">Ciudad</td><td><?php echo $fila->Ciudad;?></td></tr>
                <tr><td class="controls">Contraseña</td><td><?php echo $fila->Contraseña;?></td></tr>
                <tr><td class="controls">Cfcontraseña</td><td><?php echo $fila->Cfcontraseña;?></td></tr>
            </table>
        </div>
    </body>
</html>