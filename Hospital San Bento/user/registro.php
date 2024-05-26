<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="login-container">
    
    <p >Registrate ahora y obten acceso completo a nuestra aplicacion. </p>

        <h2>Registro de Usuario</h2>
        <form action="Registrar.php" method="post">
            <label for="username">Usuario:</label>
            <div class="input-with-icon">
                <i class="fas fa-user"></i>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Contraseña:</label>
            <div class="input-with-icon">
                <i class="fas fa-key"></i>
            <input type="password" name="password" id="password" required><br>
            
            <label for="email">Correo Electrónico:</label>
            <div class="input-with-icon">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" required><br>
            <label for="phone">Teléfono:</label>
            <div class="input-with-icon">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" name="phone" id="phone" required><br>
            <label for="gender">Sexo:</label>
            <select name="gender" id="gender" required>
                <option value="">Selecciona...</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select><br>
            <input type="submit" value="Registrar">
            <input type="button" value="Cancelar" onclick="location.href='tu-url-aqui';">
        </form>
    </div>
</body>
</html>
