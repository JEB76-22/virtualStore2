<?php
session_start();
include("config/conexion.php");
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Invitado';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>Virtual Store</title>
</head>

<body>
    <header class="header">
        <div class="container-logo">
            <a><img class="header__logo" src="image/logo4.webp" alt="logotipo"></a>
        </div>

        <div class="container-icon">
            <div class="container-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" class="icon-cart">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <div class="count-products">
                    <span id="contador-productos">0</span>
                </div>
            </div>

            <div class="container-cart-products hidden-cart">
                <div class="row-product hidden">
                    <div class="cart-product">
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito">1</span>
                            <p class="titulo-producto-carrito">ZApatos nike</p>
                            <span class="precio-producto-carrito">$80</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>

                <div class="cart-total hidden">
                    <h3>Total:</h3>
                    <span class="total-pagar">$200</span>
                </div>
                <p class="cart-empty">El carrito está vacío</p>
            </div>
        </div>
        
        <div class="usuario">
        <h3><?php echo $nombreUsuario; ?></h3>
            <h4><a href="/index.php">Cerrar</a></h4>
        </div>
    </header>

    <nav class=" navbar">
        <input type="checkbox" class="checkbox">
        <i class="iconos fi fi-br-menu-burger"></i>
        <i class="iconos fi fi-br-cross"></i>

        <ul class="menu">
            <li> <a  class="menu__color">TIENDA</a></li>
            <li><a >NOSOTROS</a></li>
            <li><a >LOGIN</a></li>
            <li><a >REGISTRO</a></li>
            <li>
            <select id="selector" class="select">
                <option value="producto-7">remeras</option>
                <option value="producto-18">Gorras</option>
                <option value="producto-27">shorts</option>
             </select>
            </li>
        </ul>
    </nav>
    
    <main class="contenedor">


    <h1 class="index-titulo">Nuestros Productos</h1>
        <div class="grid">
            <div class="producto item" id="producto-1">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/1.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">VueJS</p>
                        <h3 class="producto__precio">$ 6300</h3>
                    
                        <button class="btn btn-outline-info btn-lg btn-add-cart"> Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-2">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/2.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">AngularJS</p>
                        <h3 class="producto__precio">$ 6500</h3>
                    
                        <button class="btn btn-outline-warning btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->


            <div class="producto item" id="producto-3">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/3.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">ReactJS</p>
                        <h3 class="producto__precio">$ 6900</h3>
                    
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-4">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/4.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Redux</p>
                        <h3 class="producto__precio">$ 6100</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto.5">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/5.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">NodeJS</p>
                        <h3 class="producto__precio">$ 6900</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-6">
                <a class="producto__imagen" href="producto.php">
                    <figure>
                        <img src="image/6.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">SASS</p>
                        <h3 class="producto__precio">$ 6800</h3>
                        
                        <button class="btn btn-outline-warning btn-lg ">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-7">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/7.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">HTML5</p>
                        <h3 class="producto__precio">$ 6500</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-8">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/8.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">GitHub</p>
                        <h3 class="producto__precio">$ 6400</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-9">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/9.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">BulmaCSS</p>
                        <h3 class="producto__precio">$ 6300</h3>
                        
                        <button class="btn btn-outline-warning btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-10">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/10.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">TypeScript</p>
                        <h3 class="producto__precio">$ 6200</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-11">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/11.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <h3 class="producto__precio">$6100</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-12">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/12.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">JavaScript</p>
                        <h3 class="producto__precio">$ 6800</h3>
                        
                        <button class="btn btn-outline-warning btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-13">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/13.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">GraphQL</p>
                        <h3 class="producto__precio">$ 6600</h3>
                        
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-14">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/14.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">WordPress</p>
                        <h3 class="producto__precio">$ 6900</h3>
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-15">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/2.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Angular</p>
                        <h3 class="producto__precio">$ 6900</h3>
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-16">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/3.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">React</p>
                        <h3 class="producto__precio">$ 6900</h3>
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-17">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/11.jpg" alt="imagen camisa">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <h3 class="producto__precio">$ 6900</h3>
                        <button class="btn btn-outline-info btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-18">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-azul.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">MLB Cooperstown</p>
                        <h3 class="producto__precio">$ 15100</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-19">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-blanca.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">NIKE DRI-FIT</p>
                        <h3 class="producto__precio">$ 10700</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-20">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-negra.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">47 CLEAN UP</p>
                        <h3 class="producto__precio">$ 17600</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-21">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-marron.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">BOSS men's</p>
                        <h3 class="producto__precio">$ 22200</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-22">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-celeste.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Zephyr Women's</p>
                        <h3 class="producto__precio">$ 23500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-23">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-gris.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">47 MLB Khaki</p>
                        <h3 class="producto__precio">$ 12700</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-24">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-roja.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Zephyr Nebraska</p>
                        <h3 class="producto__precio">$ 26400</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-25">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-miky.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Disney  de béisbol</p>
                        <h3 class="producto__precio">$ 14700</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-26">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/gorra-vordo.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Cachucha NCCAA</p>
                        <h3 class="producto__precio">$ 22500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            
            <!-- shorts -->
            <div class="producto item" id="producto-27">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short-rojo.jpg" alt="imagen short">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Amazon Essentials</p>
                        <h3 class="producto__precio">$ 20500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-28">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short-verde.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Amazon Essentials</p>
                        <h3 class="producto__precio">$ 22500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-29">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short-camauflado.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">Amazon Essentials</p>
                        <h3 class="producto__precio">$ 22500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->

            <div class="producto item" id="producto-30">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short4.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">short dama</p>
                        <h3 class="producto__precio">$ 12500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-31">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short5.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">short dama</p>
                        <h3 class="producto__precio">$ 12700</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="producto item" id="producto-32">
                <a class="producto__imagen">
                    <figure>
                        <img src="image/short6.jpg" alt="imagen gorra">
                    </figure>
                    <div class="producto__informacion">
                        <p class="producto__nombre">short dama</p>
                        <h3 class="producto__precio">$ 11500</h3>
                        <button class="btn btn-primary btn-lg btn-add-cart">Agrega Carrito</button>
                    </div>
                </a>
            </div><!--producto fin -->
            <div class="grafico grafico--camisas "></div>
            <div class="grafico grafico--node "></div>
    </div>
      
    </main>
    <section>
        <div class="slaider">
            <div class="slide-track">

                <div class="slide">
                    <img src="image/gorra-azul.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/7-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-vordo.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-gris.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/4-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/14-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-negra.jpg" alt="gorra">
                </div>
                <!-- ////////////////////////////////////////////////////////////////////// -->
                <div class="slide">
                    <img src="image/gorra-azul.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/7-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-vordo.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-gris.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/4-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/14-s.jpg" alt="gorra">
                </div>
                <div class="slide">
                    <img src="image/gorra-negra.jpg" alt="gorra">
                </div>

            </div>
        </div>
    </section>
 
    <button class="btn-up hide" id="up">
        <img src="image/chevron-doble.png" alt="flecha arriba" class="img-up">
    </button>

    <footer class="footer">
        <p class="footer__texto">Virtual Store - &#169 Todos los derechos reservados 2023 . </p>
        <div class="footer__iconos">
            <a href="https://github.com/" target="_blank">
                <figure><img src="image/github.svg" width="24" height="24"></figure>
            </a>
            <div class="footer__texto">
                <p>Jeb&Dev</p>
            </div>
            <a href="https://www.linkedin.com/in/javier-eduardo-berchtold-4270a7182/" target="_blank">
                <figure><img src="image/linkedin.svg" width="24" height="24"></figure>
            </a>
        </div>

    </footer>

    <script src="javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>