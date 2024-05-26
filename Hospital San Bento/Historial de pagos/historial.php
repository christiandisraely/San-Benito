<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de factura </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        function validarFormulario() {
            var numeroFactura = document.getElementById('numeroFactura').value;
            var nit = document.getElementById('nit').value;
            var motivo = document.getElementById('motivo').value;
            if (numeroFactura == "" || nit == "" || motivo == "") {
                alert("Todos los campos deben ser llenados");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Historial de facturas </h2> 
        <form onsubmit="return validarFormulario()">
            <label for="numeroFactura">Número de Factura:</label><br>
            <input type="text" id="numeroFactura" name="numeroFactura" required><br>
            <label for="nit">NIT:</label><br>
            <input type="text" id="nit" name="nit" required><br>
            <label for="motivo">Motivo :</label><br>
            <select id="motivo" name="motivo" required>
                <option value="">Selecciona una opción</option>
                <option value="a">verificar monto</option>
                <option value="b">extravio de factura</option>
                
               
            </select><br>
            <input type="submit" value="Buscar">
            <input type="reset" value="Cancelar">
            <input type="button" value="Descargar">
        </form>
    </div>
</body>
</html>
