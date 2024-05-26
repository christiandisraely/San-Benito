<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Respaldo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validarFormulario() {
            var nombreRespaldo = document.getElementById('nombreRespaldo').value;
            var fechaRespaldo = document.getElementById('fechaRespaldo').value;
            var descripcionRespaldo = document.getElementById('descripcionRespaldo').value;
            var ubicacion = document.getElementById('ubicacion').value;
            if (nombreRespaldo == "" || fechaRespaldo == "" || descripcionRespaldo == "" || ubicacion == "") {
                alert("Todos los campos deben ser llenados");
                return false;
            }
            // Formatear la fecha a "día/mes/año"
            var fecha = new Date(fechaRespaldo);
            var dia = fecha.getDate();
            var mes = fecha.getMonth() + 1; // Los meses en JavaScript empiezan desde 0
            var ano = fecha.getFullYear();
            fechaRespaldo = dia + '/' + mes + '/' + ano;
            alert("La fecha del respaldo es: " + fechaRespaldo);
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Formulario de Respaldo</h2> 
        <form onsubmit="return validarFormulario()">
            <label for="nombreRespaldo">Nombre del Respaldo:</label><br>
            <input type="text" id="nombreRespaldo" name="nombreRespaldo" required><br>
            <label for="fechaRespaldo">Fecha del Respaldo:</label><br>
            <input type="date" id="fechaRespaldo" name="fechaRespaldo" required><br>
            <label for="descripcionRespaldo">Descripción del Respaldo:</label><br>
            <textarea id="descripcionRespaldo" name="descripcionRespaldo" required></textarea><br>
            <label for="ubicacion">Ubicación:</label><br>
            <input type="text" id="ubicacion" name="ubicacion" required><br>
            <input type="submit" value="Crear Respaldo">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
