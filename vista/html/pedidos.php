<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="vista/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="vista/img/portafolio.jpeg" type="image/x-icon">


        <title>Mi pedido</title>
    </head>
    <body>

        <section class="contact-box">
            <div class="row no-gutters bg-dark">
                <div class="col-xl-5 col-lg-12 register-bg">
                    <div class="position-absolute testiomonial p-4">
                        <h3 class="font-weight-bold text-light">Hambre?.</h3>
                        <p class="lead text-light">Con nuestros platos eso jamas .</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 d-flex">
                    <div class="container align-self-center p-6">
                        <p><i class="fas fa-truck icon"></i> <h1 class="font-weight-bold mb-3">Mi pedido</h1>

                        <div class="form-group"></p>
                            <a href="https://youtu.be/GPM5-Yx2wDA" target="_blank" rel="noopener noreferrer"><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="fab fa-youtube align-middle  mr-2"></i>YouTube</button></a>
                            <a href="vista/html/inicio_de_sesion.php"><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100">Cerrar sesion</button></a>
                        </div>
                        <p class="text-muted mb-5" color:black>Ingresa la siguiente información para tu solicitar tu pedido.</p>

                        <form id="frmregistrar" action="../../index.php?accion=registrar1" method="post" class="slider-form">
                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="Nombre" required id="Nombre"  placeholder="Tu nombre" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="Apellido" required id="Apellido" placeholder="Tu apellido">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="Correo" required id="Correo " placeholder="Ingresa tu correo electrónico">
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Barrio<span class="text-danger">*</span></label>
                                <select  class="form-control" name="Barrio" required id="Barrio">
                                    <option value=""></option>
                                    <option value="7 de Agosto" >7 de Agosto</option>
                                    <option value="20 de Julio" >20 de Julio</option>
                                    <option value="Modelo sur" >Modelo sur</option>
                                    <option value="La Marichuela" >La Marichuela</option>
                                    <option value="Garcés Navas" >Garcés Navas</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Direccion <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Direccion" required id="Direccion" placeholder="Direccion">
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Celular" required id="Celular" placeholder="Direccion">
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Menu<span class="text-danger">*</span></label>
                                <select class="form-control" name="Menu" required id="Menu">
                                    <option value=""></option>
                                    <option value="Lengua en Salsa $21.000" >Lengua en Salsa $21.000</option>
                                    <option value="Bandeja paisa $15.000" >Bandeja paisa $15.000</option>
                                    <option value="Arroz con pollo $16.000" >Arroz con pollo $16.000</option>
                                    <option value="Carne asada $16.500" >Carne asada $16.500</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Cuantos platos deseas?<span class="text-danger">*</span></label>
                                <select class="form-control" name="platos" required id="platos">
                                    <option value=""></option>
                                    <option value="1 plato" >1 plato</option>
                                    <option value="2 platos" >2 platos</option>
                                    <option value="3 platos" >3 platos</option>
                                    <option value="4 platos" >4 platos</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Pide tus paltos como quieras<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="observaciones" required id="observaciones" placeholder="observaciones">
                            </div>
                            <br>
                            <div class="form-group mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                                </div>
                            </div>
                            <button class="btn btn-primary width-100" type="submit" name="registroenviar" value="enviar" id="registrar">Ordenar</button>

                        </form>
                        <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2021 caldero de pepito</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

