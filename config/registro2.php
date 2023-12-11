
<?php 
//reporte de errores!!
error_reporting(E_ALL);
ini_set('display_errors', 1);



//la conexion ok
include("conexion.php");
// echo "Hola desde registro2";


//traemos los datos del formulario
$nombreCompleto = $_POST['NombreCompleto'];
$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];
$rClave = $_POST['RClave'];
//hashamos la contraseña.
$clave = hash('sha512', $clave);


//guardamos en la base de datos
$query = "INSERT INTO datos (nombreCompleto, nombreUsuario,   clave)
           VALUES ('$nombreCompleto','$usuario', '$clave' )";

//si esta vacio
if(empty($rClave)){
    echo '
    <script>
    alert("La Clave esta vacia, Ingresa nuevamente..");
    window.location="../registro.php"; 
    </script>
    ';
    exit();               
}
//si esta vacio
if(empty($nombreCompleto)){
    echo '
    <script>
    alert("El nombre esta vacio, Ingresa nuevamente..");
    window.location="../registro.php"; 
    </script>
    ';
    exit();               
}
//verificar nombre, la consulta
$VerificarNombre = mysqli_query($conexion, "SELECT * FROM datos WHERE nombreCompleto= '$nombreCompleto'");
if(mysqli_num_rows($VerificarNombre) > 0 ){
    echo '
    <script>
    alert("Este Nombre ya Existe, Ingresa nuevamente..");
    window.location="../registro.php"; 
    </script>
    ';
    exit();//sale
}

//si esta vacio
if(empty($usuario)){
    echo '
    <script>
    alert("El Usuario esta vacio, Ingresa nuevamente..");
    window.location="../registro.php"; 
    </script>
    ';
    exit();               
}

//verificar usuario, la consulta
$VerificarUsuario = mysqli_query($conexion, "SELECT * FROM datos WHERE nombreUsuario= '$usuario'");
if(mysqli_num_rows($VerificarUsuario) > 0 ){
    echo '
    <script>
    alert("Este Usuario ya Existe, Ingresa nuevamente..");
    window.location="../registro.php"; 
    </script>
    ';
    exit();//sale
}

//Ejecutamos la query
$ejecutar = mysqli_query($conexion, $query);

//registrado correctamente
if($ejecutar){
    $nombreCompletoMay = strtoupper($nombreCompleto);//a mayusculas
    echo '
    <script>
    alert(" Usuario creado con Exito:    '.$nombreCompletoMay.'   ");
    window.location = "../login.php";
    </script>
    ';
}//no se registro
else{
    echo '
    <script>
    alert("Usuario No alamcenado:      '.$nombreCompletoMay.'    ");
    window.location = "../registro.php";
    </script>
    '; 
}
//cerramos la conexion
mysqli_close($conexion);

?>