<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="../js/responsiveslides.min.js"></script>
        <link rel="stylesheet" href="../css/registro.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    </head>
    <script>
        $(function () {
            $(".rslides").responsiveSlides({
                timeout: 5000
            });
        });
    </script>
</head>
<body>
    <div class="slider-wrap">
        <ul class="rslides">
            <li><img src="../img/1.png" alt=""></li>
            <li><img src="../img/2.png" alt=""></li>
            <li><img src="../img/3.png" alt=""></li>
        </ul>
        <div class="slider-container">
            <div class="form-title">
                <h1>Registrate</h1><center><img src="../img/Logo.jpeg" id="myheader" alt="sena.com" width="50" height="50"></center>
            </div>
            <form id="frmregistrar" action="../../index.php?accion=registrar" method="post" class="slider-form">

                <div class="form-group mb-3">
                    <label class="font-weight-bold">NºDocumento<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="registrodocumento"autocomplete required id="registrodocumento" placeholder="Cedula">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Nombres<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="registronombres"autocomplete required id="registronombres" placeholder="Nombres">
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold">Apellidos<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="registroapellido"autocomplete required id="registroapellido" placeholder="Apellidos">
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold">Dirección<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="registrodireccion"autocomplete required id="registrodireccion" placeholder="Tu dirección">
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold">Nºcelular<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="registrocelular"autocomplete required id="registrocelular" placeholder="Celular">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Correo</label><span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="registrocorreo"autocomplete required id="registrocorreo" placeholder="Tu correo">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Pais<span class="text-danger">*</span></label>
                    <select class="form-control" name="registropais" required id="registropais">
                        <option value=""></option>
                        <option value="colombia" >Colombia</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Departamento<span class="text-danger">*</span></label>
                    <select class="form-control" name="registrodep" required id="registrodep">
                        <option value=""></option>
                        <option value="Cundinamarca" >Cundinamarca</option>
                    </select>
                </div>
                <div class="form-group mb-3">

                    <label class="font-weight-bold">Ciudad<span class="text-danger">*</span></label>
                    <select class="form-control" name="registrociudad" required id="registrociudad">
                        <option value=""></option>
                        <option value="Bogotá D.C" >Bogotá D.C</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Contraseña<span class="text-danger">*</span></label>
                    <input maxlength="10" minlength="4" type="password" class="form-control" name="registrocontraseña"autocomplete required id="registrocontraseña" placeholder="Contraseña">
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Confirma-contraseña<span class="text-danger">*</span></label>
                    <input maxlength="10" minlength="4" type="password" class="form-control" name="registrocfcontraseña"autocomplete required id="registrocfcontraseña" placeholder=" Confirma tu Contraseña">
                </div>
                <p>¿Tienes una cuenta? <a class="link"  href="inicio_de_sesion.php">Iniciar seseion </a></p>
                <p>no te pierdas de nuetras ofertas limitadas<a class="link" href="../html/index.php"> MENU</a></p>

                <button class="buton" type="submit" name="registroenviar" value="enviar" id="registrar">Registrarme</button>
            </form>
        </div>
    </div>
</body>
</html>