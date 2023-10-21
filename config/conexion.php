<?php

$conexion = new mysqli("localhost", "root","root","vitualbd");

if($conexion) {
    echo "conexion erronea...";
}else{
    echo "hola";
}



?>


