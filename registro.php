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
        <div>
        <a href="index.php">
            <img  src="image/logo3.png" alt="logotipo">
        </a>
        </div>
        
        <div class="copos">
            <svg width="200" height="200" viewBox="-100 -100 200 200">
                <defs>
                    <g id="tree">
                        <polygon points="-10,0 10,0 0 -50" fill="#38755b" />
                        <line x2="0" y2="10" stroke="#778074" stroke-width="2" />
                    </g>
                    <circle id="big" cx="0" cy="0" r="5" fill="white" />
                    <circle id="small" cx="0" cy="0" r="3" fill="white" />
                </defs>

                <rect x="-100" y="-100" width="200" height="200" fill="#F1DBC3" />
                <circle cx="0" cy="380" r="350" fill="#F8F4E8" />

                <use href="#tree" x="-30" y="25" transform="scale(2)" />
                <use href="#tree" x="-20" y="40" transform="scale(1.2)" />
                <use href="#tree" x="40" y="40" />
                <use href="#tree" x="50" y="30" transform="scale(1.5)" />

                <use href="#big" x="0" y="0" class="flake fast" />
                <use href="#big" x="-50" y="-20" class="flake fast opaque" />
                <use href="#big" x="30" y="-40" class="flake fast" />
                <use href="#big" x="50" y="-20" class="flake fast opaque" />
                <use href="#big" x="30" y="50" class="flake slow" />
                <use href="#big" x="-70" y="-80" class="flake slow opaque" />
                <use href="#big" x="30" y="50" class="flake slow" />
                <use href="#big" x="90" y="-80" class="flake slow opaque" />
                <use href="#small" x="10" y="-50" class="flake slow" />
                <use href="#small" x="-50" y="-60" class="flake slow opaque" />
                <use href="#small" x="30" y="70" class="flake slow" />
                <use href="#small" x="10" y="-80" class="flake slow opaque" />
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

    <main class="contenedor__registro">
        <div class="registro">
            <form method="POST" action="config/registro2.php" id="formu">
                <h1>REGISTRO</h1>
             
                <div class="input-box">
                    <input type="text" placeholder="Usuario" name="Usuario">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nombre Completo" name="NombreCompleto">
                    <i class='bx bxs-home-heart'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Clave" name="Clave">
                    <i class='bx bx-mail-send'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Repite Clave" name="RClave">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="recuerdame">
                    <label><input type="checkbox"> Recuerdame</label>
                    <a>Has olvidado tu contraseña</a>
                </div>
                <button type="submit" class="btn"> REGISTRARSE</button>
                <div class="registro-link">
                    <p class="parrafo">¿No tienes una cuenta?</p>
                    <button class="btn btn__login"> <a href="login.php">Iniciar Sesion</a> </button>
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
<!-- Jeb&Dev -->