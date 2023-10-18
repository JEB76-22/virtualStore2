<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/virtualStore2/css/style.css">
    <link rel="stylesheet" href="http://localhost/virtualStore2/css/menu.css">


    <title>Virtual Store</title>
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="image/logo3.png" alt="logotipo">
        </a>
    </header>

    <nav class=" navbar"> 
        <input type="checkbox" class="checkbox">
        <i class="iconos fi fi-br-menu-burger"></i>
        <i class="iconos fi fi-br-cross"></i>

        <ul class="menu menu__activo">
           <li> <a class="menu__color" href="index.php">TIENDA</a></li>
           <li><a href="nosotros.php">NOSOTROS</a></li>
           <li><a href="login.php">LOGIN</a></li>
           <li><a href="registro.php">REGISTRO</a></li>
        </ul>
       
    </nav>

    <main class="contenedor__registro">
        <div class="registro">
            <form method="post">
                <h1>REGISTRO</h1>
                <div class="input-box">
                    <input type="text" placeholder="Ingresa  nombre" required  name="nombre" >
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Ingresa  Domicilio" required  name="domicilio">
                    <i class='bx bxs-home-heart'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Ingresa  Correo" required name="email">
                    <i class='bx bx-mail-send'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Nueva Contraseña" required name="pass">
                    <i class='bx bxs-lock-alt'></i>
                </div>
             
                <div class="recuerdame">
                    <label><input type="checkbox" name="" id="">  Recuerdame</label>
                    <a href="#">Has olvidado tu contraseña</a>
                </div>
                <button type="submit" class="btn" name="register">GUARDAR REGISTRO</button>
                <div class="registro-link">
                    <p class="parrafo">¿No tienes una cuenta?</p>
                     <a href="#">Registrarse</a> 
                </div>
            </form>
            <?php 
        include("registrar.php");
        ?>
        </div>

    </main>

    <footer class="footer">
        <p class="footer__texto">Virtual Store - &#169 Todos los derechos reservados 2023 . </p>
        <div class="footer__iconos">
    <a href="https://github.com/" target="_blank"> <figure><img src="image/github.svg" width="24" height="24"></figure></a>
    <div class="footer__texto"><p>Jeb&Dev</p></div>
    <a href="https://www.linkedin.com/in/javier-eduardo-berchtold-4270a7182/" target="_blank"><figure><img src="image/linkedin.svg" width="24" height="24"></figure></a>
        </div>
     
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
                                                            <!-- Jeb&Dev -->