<?php

$server = "localhost";
$user = "root";
$pass = "Iber2024/";
$db = "hospital";
$port = 3307;

$conexion = new mysqli($server, $user, $pass, $db, $port);

if($conexion->connect_errno){
    die("Conexion Fallida: " . $conexion->connect_errno);
} else{
    echo "Conexion exitosa";
}

?>
