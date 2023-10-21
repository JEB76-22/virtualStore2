<?php

session_start();

include_once('config/conexion.php');
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
        header('location: ../registro.php?error=El usuario es requerido&$datosUsuario');
        exit();      
    }elseif(empty($nombreCompleto)){
        header('location: ../registro.php?error=El nombre completo es requerido&$datosUsuario');
        exit(); 
    }elseif(empty($clave)){
        header('location: ../registro.php?error= La clave es requerida&$datosUsuario');
        exit(); 
    }elseif(empty($rclave)){
        header('location: ../registro.php?error= Repite clave es requerida&$datosUsuario');
        exit(); 
    }elseif($clave !== $rclave){
        header('location: ../registro.php?error= La clave no coincide...&$datosUsuario');
        exit();

    }else{
        $clave = md5($clave);
        $sql = "SELECT * FROM datos WHERE nombreUsuario = '$usuario'";
        $query = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($query) > 0){
            header('location: ../registro.php?error= El usuario ya Existe&$datosUsuario');
            exit();
        }else{
            $sql2 = "INSERT INTO datos (nombreCompleto, nombreUsuario, clave) VALUES ('$nombreCompleto','$usuario', '$clave')";
            $query2 = mysqli_query($conexion, $sql2);

            if($query2){
                header('location: ../registro.php?success= Usuario creado con exito&$datosUsuario');
                exit();
            }else{
                header('location: ../registro.php?success= Ocurrio un error..&$datosUsuario');
                exit();
            }
        }

    }
}else{
    header("location: ../registro.php");
}

?>