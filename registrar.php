<?php

include("con_bd.php");

if(isset($_POST["register"])){

    if(strlen($_POST["nombre"]) >= 1 &&
      strlen($_POST["domicilio"]) >= 1 &&
      strlen($_POST["email"]) >= 1 && 
      strlen($_POST["pass"]) >= 1){

        $nombre = trim($_POST["nombre"]) ;
        $domicilio = trim($_POST["domicilio"]) ;
        $email = trim($_POST["email"]) ;
        $pass = trim($_POST["pass"]) ;
        $consulta = "INSERT INTO clientes(nombre, domicilio, email, password) VALUES ('$nombre', '$domicilio','$email', '$pass' )";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">!Ups ocurrio un error!</h3>
            <?php
        }
      }else{
        ?>
        <h3 class="bad">¡Completa los datos por favor!</h3>
        <?php
      }

}

?>