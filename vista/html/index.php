<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caldero de pepito</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="shortcut icon" href="../img/portafolio.jpeg" type="image/x-icon">
        <script src="https://kit.fontawesome.com/a27ea3be09.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <header id="header" class="header">
            <div class="container">
                <div class="row">

                    <div class="four columns">
                        <img src="../img/Logo.jpeg" height="100" width="100px"  alt="" id="logo">
                    </div>

                    <div class="two columns">
                        <ul>
                            <li class="submenu">
                                <i class="fas fa-shopping-cart iconos"></i>
                                <div id="carrito">
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="four columns">
                            <ul class="navct">
                                <li  height="100" width="100px" class="four columns "><a href="../html/index.php"><class = "btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="fas fa-home iconos"></i></i></i></a>
                                <li class="four columns "><a href="inicio_de_sesion.php"><class = "btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="fas fa-user iconos"></i></i></i></a>
                                <li class="four columns "><a href="Nosotros.php"><class = "btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="fas fa-building iconos"></i></i></i></i></a>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div id="hero">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                            <h2>Pide tu plato favorito <br>"No te quedes con el antonjo"</h2>
                            <p>Todos los platos estan en descuento</p>
                            <form action="#" id="busqueda" method="post" class="formulario">
                                <input class="u-full-width" type="text" 
                                       placeholder="Que te gustaria comprar"
                                       id="buscador"
                                       >
                                <input type="submit" id="submit-buscador" class="submit-buscador">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="barra">
            <div class="container">
                <div class="row">
                    <div class="four columns icono ">
                        <i class="fas fa-star iconos"></i>
                        <p>
                            Explora los sabores de colombia, mezclados con la alta cocina<br>
                        </p>
                    </div>
                    <div class="four columns icono ">
                        <i class="fas fa-utensils iconos"></i>
                        <p>Nuestros platos estan catalogados entre los mejores de la ciudad<br>

                        </p>
                    </div>
                    <div class="four columns icono">
                        <i class="fas fa-leaf iconos"></i>
                        <p>Nuestros platps estan preparados con productos del campo<br>
                            100% Naturales
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="lista-cafe" class="container">
            <h1 id="encabezado" class="encabezado">Pedidos en linea</h1>
            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="../img/a.png" class="u-full-width">
                        <div class="info-card">
                            <h4>Lengua en salsa</h4>
                            <p>Plato Colombiano </p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$28.900 <span class="u-pull-right">$21.000</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../img/p.png" class="u-full-width">
                        <div class="info-card">
                            <h4>Bandeja paisa</h4>
                            <p>Plato de la Tierrita</p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$20.000 <span class="u-pull-right">$15.000</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../img/plato3.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>Arroz con pollo</h4>
                            <p>Plato del interior del pais</p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$20.000 <span class="u-pull-right">$16.000</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
            </div><!--.row-->

            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="../img/aa.png" class="u-full-width">
                        <div class="info-card">
                            <h4>Carne asada</h4>
                            <p>El sabor del llano en tu mesa</p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$23.000 <span class="u-pull-right">$16.500</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../img/a.png" class="u-full-width">
                        <div class="info-card">
                            <h4>Lengua en salsa</h4>
                            <p>Plato Colombiano </p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$28.900 <span class="u-pull-right">$21.000</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="../img/p.png" class="u-full-width">
                        <div class="info-card">
                            <h4>Bandeja paisa</h4>
                            <p>Plato de la Tierrita</p>
                            <img src="../img/estrellas.png" >
                            <p class="precio">$20.000 <span class="u-pull-right">$15.000</span></p>
                            <a href="#" 
                               class="u-full-width button-primary button input agregar-carrito                        
                               ">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer" class="footer"> 
                <div class="container">
                    <div class="row">
                        <div class="four columns">
                            <nav >
                                <a class="enlace" <h4>. Desarrollado con dedicación </h4></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="../js/app.js"></script>
    </body>
</html>

