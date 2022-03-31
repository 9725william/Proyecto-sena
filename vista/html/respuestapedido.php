<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pedidos solicitados</title>
        <link rel="stylesheet" href="vista/css/respuestaconsul.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
    </head>
    <body><section class="form-register">

              <div>
            <h1>Orden de pedidos</h1>
        </div>
        <div > 
        <table border="1" class="controls">
                <?php $fila = $result->fetch_object();
                ?>
                
                <tr><th colspan="4">Datos del pedido</th></tr>
                <tr><td class="controls">Nombre</td><td><?php echo $fila->Nombre; ?></td></tr>
                <tr><td class="controls">Apellido</td><td><?php echo $fila->Apellido; ?></td></tr>
                <tr><td class="controls">Correo</td><td><?php echo $fila->Correo; ?></td></tr>
                <tr><td class="controls">Barrio</td><td><?php echo $fila->Barrio; ?></td></tr>
                <tr><td class="controls">Direccion</td><td><?php echo $fila->Direccion; ?></td></tr>
                <tr><td class="controls">Celular</td><td><?php echo $fila->Celular; ?></td></tr>
                <tr><td class="controls">Menu</td><td><?php echo $fila->Menu; ?></td></tr>
            </table>
        </div>
    </body>
</html>