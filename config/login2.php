<?php
//reporte de errores!!
error_reporting(E_ALL);
ini_set('display_errors', 1);

//la conexion oka
include("conexion.php");
// echo "Hola desde login2";

//los datos del formulario
$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];
// echo "$usuario";
// echo "$clave";
$clave = hash('sha512', $clave);
//encriptamos la clave

//valiadmos nombre , clave y redirigimos la consulta
$validarLogin = mysqli_query($conexion, "SELECT * FROM datos WHERE nombreUsuario= '$usuario' AND clave='$clave'");
if(mysqli_num_rows($validarLogin) > 0 ){
    echo '
    <script>
    alert("Bienvenido : '.$usuario.' ");
    window.location=" ../inicio.php"; 
    </script>
    ';
    exit();
}else{
    echo '
        <script>
        alert("Usuario o Clave Inválida  : '.$usuario.' ");
        window.location="../login.php"; 
        </script>
        ';
        exit(); 
}

mysqli_close($conexion);//cerramos la conexion

















?>