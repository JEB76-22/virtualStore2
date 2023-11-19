

<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);



session_start();

// '/apache/htdocs/virtualStore2/config/conexion.php'
include_once('conexion.php');

if(isset($_POST["Usuario"]) && isset($_POST["NombreCompleto"]) && isset($_POST["Clave"]) && isset($_POST["RClave"])){

    function validar($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = validar($_POST["Usuario"]);
    $nombreCompleto = validar($_POST["NombreCompleto"]);
    $clave = validar($_POST["Clave"]);
    $rclave = validar($_POST["RClave"]);

    $datosUsuario = 'Usuario=' . $usuario . '&NombreCompleto='. $nombreCompleto;

    if(empty($usuario)){
        header("Location: ../registro.php?error=El usuario es requerido!&$datosUsuario");
        exit();      
    }else if(empty($nombreCompleto)){
        header("Location: ../registro.php?error=El nombre completo es requerido!&$datosUsuario");
        exit(); 
    }else if(empty($clave)){
        header("Location: ../registro.php?error= La clave es requerida!&$datosUsuario");
        exit(); 
    }else if(empty($rclave)){
        header("Location: ../registro.php?error= Repite clave es requerida&$datosUsuario");
        exit(); 
    }else if($clave !== $rclave){
        header("Location: ../registro.php?error= La clave no coincide...&$datosUsuario");
        exit();

    }else{
        // $clave = md5($clave);
        $clave = password_hash($clave, PASSWORD_DEFAULT);
        
        $sql = "SELECT * FROM datos WHERE nombreUsuario = '$usuario'";
        $query = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($query) > 0){
            header("Location: ../registro.php?error= El usuario ya existe!&$datosUsuario");
            exit();
        }else{
            $sql2 = "INSERT INTO datos (nombreCompleto, nombreUsuario, clave) VALUES ('$nombreCompleto','$usuario', '$clave')";
            $query2 = mysqli_query($conexion, $sql2);

            if($query2){
                header("Location: ../registro.php?success= Usuario creado con exito!!!&$datosUsuario");
                exit();
            }else{
                header("Location: ../registro.php?success= Ups ocurrio un error...&$datosUsuario");
                exit();
            }
        }

    }
}else{
    header("location: ../registro.php");
}
*/
?>


