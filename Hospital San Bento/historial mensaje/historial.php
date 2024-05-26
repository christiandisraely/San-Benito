<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        function validarFormulario() {
            var fechaHora = document.getElementById('fechaHora').value;
            var motivo = document.getElementById('motivo').value;
            var correo = document.getElementById('correo').value;
            var regexCorreo = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
            if (fechaHora == "" || motivo == "" || correo == "" || !regexCorreo.test(correo)) {
                alert("Todos los campos deben ser llenados y el correo electrónico debe ser válido");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Mensaje</h2>
        <form onsubmit="return validarFormulario()">
            <label for="fechaHora">Fecha y Hora:</label><br>
            <input type="datetime-local" id="fechaHora" name="fechaHora" required><br>
            <label for="motivo">Motivo del Mensaje:</label><br>
            <select id="motivo" name="motivo" required>
                <option value="">Selecciona una opción</option>
                <option value="a">Consulta Medica</option>
                <option value="b">consultas sobre  Recetas</option>
                <option value="c">Programacion de Citas</option>
            </select><br>
            <label for="correo">Correo Electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br>
            <input type="submit" value="Buscar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
