<?php

/*include_once 'Cconexion.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender'])){

    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];
    $correo = $_POST['email'];
    $telefono =$_POST['phone'];
    $sexo = $_POST['gender'];

    $sql = "INSERT INTO registro (usuario, contraseña, correo, telefono, sexo) values ('$usuario', '$contraseña', '$correo',
    '$telefono', '$sexo')";

    if($conexion -> query($sql) === TRUE){
        header("Location: usuario.php");

    }else{
        echo"Error al insertar datos: " . $conexion->error;

    }

    $conexion ->close();
}else{
    echo"Error: Datos del formulario no fueron ingresados correctamente";
}
*/


// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Hospital");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (username, password, email, phone, gender) VALUES ('$username', '$password', '$email', '$phone', '$gender')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    header("Location: usuario.php");
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();


?>
