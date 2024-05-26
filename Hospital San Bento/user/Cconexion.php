<?php

$host = "localhost";
$user = "root";
$password = "Iber2024/";
$database = "hospital";
$port = 3307;

// Crear conexión
$conexion = mysqli_connect($host, $user, $password, $database, $port);

// Verificar conexión
if (!$conexion) {
    die("No se realizó la conexión a la base de datos, el error fue: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}

?>
