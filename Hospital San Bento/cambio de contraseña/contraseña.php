<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cambio de Contraseña</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        function validarFormulario() {
            var nuevaContrasena = document.getElementById('nuevaContrasena').value;
            var repetirContrasena = document.getElementById('repetirContrasena').value;
            var correoElectronico = document.getElementById('correoElectronico').value;
            if (nuevaContrasena == "" || repetirContrasena == "" || correoElectronico == "") {
                alert("Todos los campos deben ser llenados");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Cambio de Contraseña</h2> 
        <form onsubmit="return validarFormulario()">
            <label for="nuevaContrasena">Nueva Contraseña:</label><br>
            <input type="password" id="nuevaContrasena" name="nuevaContrasena" required><br>
            <label for="repetirContrasena">Repetir Contraseña:</label><br>
            <input type="password" id="repetirContrasena" name="repetirContrasena" required><br>
            <label for="correoElectronico">Correo Electrónico:</label><br>
            <input type="email" id="correoElectronico" name="correoElectronico" required><br>
            <input type="submit" value="Cambiar Contraseña">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
