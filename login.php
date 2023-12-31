<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menu.css">
    <title>Virtual Store</title>
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img  src="image/logo3.png" alt="logotipo">
        </a>
        <div class="pinos">
            <svg width="200" height="200" viewBox="-100 -100 200 200">
                <defs>
                    <g id="tree">
                        <polygon points="-10,0 10,0 0 -50" fill="#38755b" />
                        <line x1="0" y1="0" x2="0" y2="10" stroke="#778074" stroke-width="2" />
                    </g>
                </defs>

                <rect x="-100" y="-100" width="200" height="200" fill="#F1DBC3" />
                <circle cx="0" cy="380" r="350" fill="#F8F4E8" />

                <use href="#tree" x="-30" y="25" transform="scale(2)" />
                <use href="#tree" x="-20" y="40" transform="scale(1.2)" />
                <use href="#tree" x="40" y="40" />
                <use href="#tree" x="50" y="30" transform="scale(1.5)" />
            </svg>
        </div>
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

    <main class="contenedor__login">
        <div class="login">



            <form method="POST" action="config/login2.php">
                <h1>LOGIN</h1>

                <div class="input-box">
                    <input type="text" placeholder="Ingrese Usuario" name="Usuario" autocomplete="off">
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Ingrese Clave" name="Clave" autocomplete="off">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="recuerdame">
                    <label><input type="checkbox"> Recuerdame</label>
                    <a href="registro.php">Has olvidado tu contraseña</a>
                </div>
                <button class="btn">Iniciar Sesión</button>
                <div class="registro-link">
                    <p class="parrafo">¿No tienes una cuenta? </p>
                    <button class="btn btn_login"><a href="registro.php">Registrarse</a></button>
                </div>
            </form>
        </div>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>