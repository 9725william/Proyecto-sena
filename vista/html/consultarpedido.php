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
            <h1>consultar Pedidos</h1> 
           
           
            <form id="frmconsultar" action="../../index.php?accion=buscar1" method="post"  >
                <table >

                    <select class="controls" name="conspedido" id="conspedido">
                        <option value=""></option>
                        <option value="Lengua en Salsa $21.000" >Lengua en Salsa $21.000</option>
                        <option value="Bandeja paisa $15.000" >Bandeja paisa $15.000</option>
                        <option value="Arroz con pollo $16.000" >Arroz con pollo $16.000</option>
                        <option value="Carne asada $16.500" >Carne asada $16.500</option>
                    </select>
                    <tr><td><input class="botons" type="submit" name="registroenviar" value="Consultar" id="resEnviar"></td><br>
                    <td><input class="botons" type="reset" value="limpiar"></td></tr>
                <tr><td><a href="inicio_de_sesion.php" class="botons"><i class="fas fa-door-open"></i>Cerrar sesion</td></tr>

                </table>

            </form>
    </body>
</html>
