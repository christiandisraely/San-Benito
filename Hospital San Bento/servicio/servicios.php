<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes Medicas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validarFormulario() {
            var nombreApellido = document.getElementById('nombreApellido').value;
            var dpi = document.getElementById('dpi').value;
            var anoNacimiento = document.getElementById('anoNacimiento').value;
            var servicio = document.getElementById('servicio').value;
            var medico = document.getElementById('medico').value;
            var tecnicoEnfermera = document.getElementById('tecnicoEnfermera').value;
            var motivo = document.getElementById('motivo').value;
            if (nombreApellido == "" || dpi == "" || anoNacimiento == "" || servicio == "" || medico == "" || motivo == "") {
                alert("Todos los campos deben ser llenados");
                return false;
            }
            // Formatear la fecha a "día/mes/año"
            var fecha = new Date(anoNacimiento);
            var dia = fecha.getDate();
            var mes = fecha.getMonth() + 1; // Los meses en JavaScript empiezan desde 0
            var ano = fecha.getFullYear();
            anoNacimiento = dia + '/' + mes + '/' + ano;
            alert("La fecha de nacimiento es: " + anoNacimiento);
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Imagenes Medicas</h2> 
        <form onsubmit="return validarFormulario()">
            <label for="nombreApellido">Nombre y Apellido:</label><br>
            <input type="text" id="nombreApellido" name="nombreApellido" required><br>
            <label for="dpi">DPI:</label><br>
            <input type="text" id="dpi" name="dpi" required><br>
            <label for="anoNacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="anoNacimiento" name="anoNacimiento" required><br>
            <label for="servicio">Servicio:</label><br>
            <select id="servicio" name="servicio" required>
                <option value="">Selecciona una opción</option>
                <option value="rayosX">Rayos X</option>
                <option value="mamografia">Mamografía</option>
                <option value="ultrasonidos">Ultrasonidos</option>
                <option value="resonanciaMagnetica">Resonancia Magnética</option>
            </select><br>
            <label for="medico">Médico que lo solicita:</label><br>
            <select id="medico" name="medico" required>
                <option value="">Selecciona una opción</option>
                <option value="medico1">Juan Jose Duarte</option>
                <option value="medico2">Federico Motalde</option>
                <option value="medico3">Gomez Alfonso</option>
                <option value="medico4">Jose Castillo</option>
            </select><br>
            <label for="tecnicoEnfermera">Técnico/Enfermera que realizó el examen:</label><br>
            <input type="text" id="tecnicoEnfermera" name="tecnicoEnfermera"><br>
            <label for="motivo">Motivo:</label><br>
            <textarea id="motivo" name="motivo" required></textarea><br>
            <input type="submit" value="Generar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
