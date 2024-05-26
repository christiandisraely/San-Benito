<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Tecnico</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validarFormulario() {
            var nombre = document.getElementById('nombre').value;
            var fecha = document.getElementById('fecha').value;
            var problema = document.getElementById('problema').value;
            var correo = document.getElementById('correo').value;
            var departamento = document.getElementById('departamento').value;
            if (nombre == "" || fecha == "" || problema == "" || correo == "" || departamento == "") {
                alert("Todos los campos deben ser llenados");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Soporte tecnico </h2> 
        <form onsubmit="return validarFormulario()">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha" required><br>
            <label for="problema">Tipo de Problema:</label><br>
            <select id="problema" name="problema" required>
                <option value="">Selecciona una opción</option>
               
                <option value="rendimiento">Problemas de rendimiento</option>
                <option value="error">Errores inesperados</option>
                <option value="funcionalidad">Problemas de funcionalidad</option>
                <option value="actualizacion">Problemas con las actualizaciones</option>
                <option value="compatibilidad">Problemas de compatibilidad</option>
                <option value="otros">Otros</option>
            </select><br>
            <label for="correo">Correo Electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br>
            <label for="departamento">Departamento:</label><br>
            <select id="departamento" name="departamento" required>
                <option value="">Selecciona una opción</option>
                <option value="soporteTecnico">Soporte Técnico</option>
                <option value="atencionCliente">Atención al Cliente</option>
                <option value="desarrollo">Desarrollo</option>
                
            </select><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
