<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//reporta errores


$conexion = mysqli_connect("localhost", "root","root","virtualbd");

if (!$conexion) {
    echo "Conexión fallida...";
 } 

?>


