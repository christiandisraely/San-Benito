<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <label for="usuario">Usuario:</label>
            <div class="input-with-icon">
                <i class="fas fa-user"></i>
                <input type="text" name="usuario" pattern="[A-Za-z]+" title="Solo se permiten letras" required>
            </div>
            <label for="contrasena">Contraseña:</label>
            <div class="input-with-icon">
                <i class="fas fa-key"></i>
                <input type="password" name="contrasena" pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" required>
            </div>
            <input type="submit" value="Iniciar Sesión">
            <p><a href="recuperar.php">Olvidé mi contraseña</a></p>
            <p>No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
        </form>
    </div>
    
</body>
</html>
 c 