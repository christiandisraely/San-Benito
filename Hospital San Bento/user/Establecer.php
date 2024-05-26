<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Hospital");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Verificar si las contraseñas coinciden
if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
}

// Preparar la consulta SQL para actualizar la contraseña
$sql = "UPDATE usuarios SET password='$password' WHERE email='$email'";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    header("Location: usuario.php");
} else {
    echo "Error al actualizar la contraseña: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
