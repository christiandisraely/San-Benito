<?php
/*
session_start();

include_once 'Cconexion.php';

if(isset($_POST['usuario'], $_POST['contraseña'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para verificar si el usuario y la contraseña son correctos
    $sql = "SELECT * FROM registro WHERE usuario = '$usuario'";
    $result = $conexion->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        // Verificar la contraseña usando password_verify
        if(password_verify($contraseña, $row['contraseña'])){
            // Inicio de sesión exitoso, redireccionar a la página principal o panel de control
            $_SESSION['loggedin'] = true;
            $_SESSION['usuario'] = $usuario;
            header("Location: recuperar.php");
            exit;
        }
        header("Location: recuperar.php");
    }else{
        // Usuario no encontrado
        echo "Usuario no encontrado";
    }
}else{
    // Datos del formulario no enviados
    echo "Por favor, complete el formulario de inicio de sesión";
}

$conexion -> close();
*/


// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Hospital");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para verificar si el usuario y la contraseña son válidos
$sql = "SELECT * FROM usuarios WHERE username='$usuario' AND password='$contrasena'";
$resultado = $conexion->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: ../menu/menu.html");
} else {
    // Inicio de sesión fallido
    echo "Nombre de usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
}

// Cerrar conexión
$conexion->close();



?>
