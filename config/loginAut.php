
<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include_once("conexion.php");

if(isset($_POST["Usuario"]) && isset($_POST["Clave"])){

    function validar($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    $usuario = validar($_POST["Usuario"]);
    $clave = validar($_POST["Clave"]);

    if(empty($usuario)){
        header('Location: ../login.php?error= El usuario es requerido');
        exit();
    }else if(empty($clave)){
        header('Location: ../login.php?error= La clave  es requerida');
        exit();
    }else{
        $Sql = "SELECT id, nombreUsuario, nombreCompleto, clave FROM datos WHERE nombreUsuario = '$usuario'";
        $query = mysqli_query($conexion, $Sql);

        if($query-> num_rows ==1){
            $usuariQ = $query->fetch_assoc();

            $Id =  $usuariQ["id"];
            $NombreUsuario =  $usuariQ["nombreUsuario"];
            $NombreCompleto =  $usuariQ["nombreCompleto"];
            $Clave =  $usuariQ["clave"];

            if($usuario === $NombreUsuario){
                if(password_verify($clave,$Clave)){
                    $_SESSION["id"] = $Id;
                    $_SESSION["nombreUsuario"] = $NombreUsuario;
                    $_SESSION["nombreCompleto"] = $NombreCompleto;

                    echo "<script>
                    alert('Bienvenido $NombreCompleto');      
                    window.location.href= '../inicio.php';
                    </script>";
                }else{
                    header('Location:../login.php?error= Usuario o Clave incorrecta..');
                }
            }else{
                header('Location:../login.php?error= Usuario o Clave incorrecta..');
                exit();
            }
        }else{
            header('Location:../login.php?error= Usuario o Clave incorrecta..');
            exit();
        }

    }
        
    
}
*/
?>  
