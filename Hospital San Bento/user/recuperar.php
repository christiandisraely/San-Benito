<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer Nueva Contraseña</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Establecer Nueva Contraseña</h2>
        
        <form action="Establecer.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <div class="input-with-icon">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" required><br>
            <label for="password">Nueva Contraseña:</label>
            <div class="input-with-icon">
                <i class="fas fa-key"></i>
            <input type="password" name="password" id="password" required><br>
            <label for="confirm_password">Confirmar Nueva Contraseña:</label>
            <div class="input-with-icon">
                <i class="fas fa-key"></i>
            
            <input type="password" name="confirm_password" id="confirm_password" required><br>
            <input type="submit" value="Establecer Nueva Contraseña">
            <input type="button" value="Cancelar" onclick="location.href='tu-url-aqui';">
        </form>
    </div>
</body>
</html>
