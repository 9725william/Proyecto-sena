
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>login</title> 
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link rel="stylesheet" href="../css/estilos.css">
         <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">

    </head>  
    <body>
        <form id="frmconsultar" action="../../index.php?accion=ingresar" method="post" class="formulario">

            <div id="encabezado"><center><img src="../img/Logo.jpeg" id="myheader" alt="sena.com" width="90" height="90"></center>
            </div>
            <div class="contenedor">

                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="Correo" required id="Correo" placeholder="Nombre de usuario" ></input>
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>  
                    <input type="password" name="Contraseña" required id="Contraseña" placeholder="Contraseña"></input>
                </div>


                <input class="button" type="submit" name="registroenviar" value="Ingresar" id="resEnviar">

                <p>¿No tienes una cuenta? <a class="link"  href="registro.php">Registrate </a></p>
                <p>no te pierdas de nuetras ofertas limitadas<a class="link" href="../html/index.php"> MENU</a></p>

                <p>Tus datos protegidos bajo nuestras politcas de privacidad y tratamiento de datos</p>
            </div>


        </form>
    </body>
</html>

