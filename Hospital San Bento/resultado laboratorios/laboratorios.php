<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas de laboratorio </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        
    </style>
    <script>
        function validarFormulario() {
            var fecha = document.getElementById('fecha').value;
            var dpi = document.getElementById('dpi').value;
            var nombre = document.getElementById('nombre').value;
            var nombre_prueba = document.getElementById('nombre_prueba').value;

            if (fecha == "" || dpi == "" || nombre == "" || nombre_prueba == "") {
                alert("Todos los campos deben estar llenos");
                return false;
            }

            if (!/^\d+$/.test(dpi)) {
                alert("DPI solo debe contener números");
                return false;
            }

            if (!/^[a-zA-Z\s]+$/.test(nombre)) {
                alert("El nombre solo debe contener letras");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form action="/buscar" method="post" onsubmit="return validarFormulario()">
        <label for="fecha">Fecha:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="dpi">DPI:</label><br>
        <input type="text" id="dpi" name="dpi"><br>
        <label for="nombre">Nombre del Paciente:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="nombre_prueba">Nombre de la Prueba:</label><br>
        <select id="nombre_prueba" name="nombre_prueba">
            <option value="prueba1">seleccione una opcion </option>
            <option value="prueba2">hematologia completa </option>
            <option value="prueba3">tiempo de cuagulacion</option>
            <option value="prueba1">examen de orina </option>
        </select><br>
        <input type="submit" value="Buscar">
        <input type="button" value="Cancelar" onclick="location.href='tu-url-aqui';">

    </form>
</body>
</html>
