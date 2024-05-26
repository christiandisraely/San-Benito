<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
    // Aquí puedes agregar tu código JavaScript
    </script>
</head>
<body>
    <div class="login-container">
<h2>Mensaje</h2>

<form id="myForm" action="/submit_form" method="post">
  <label for="fname">Nombre:</label><br>
  <input type="text" id="fname" name="fname" required pattern="[A-Za-z]+"><br>
  <label for="lname">Apellido:</label><br>
  <input type="text" id="lname" name="lname" required pattern="[A-Za-z]+"><br>
  <label for="reason">Motivo del Mensaje:</label><br>
  <select id="reason" name="reason" required>
    <option value="">--Por favor seleccione--</option>
    <option value="consulta">Consulta Médica</option>
    <option value="receta">consultas sobre  Recetas</option>
    <option value="cita">Programación de Cita</option>
    <!-- Agrega aquí las opciones que consideres importantes -->
  </select><br>
  <label for="details">Detalles:</label><br>
  <textarea id="details" name="details" required></textarea><br>
  <label for="email">Correo Electrónico:</label><br>
  <input type="email" id="email" name="email" required><br>
 <input type="submit" value="Enviar">
      <input type="button" class="cancelar" value="Cancelar" onclick="history.back()">
</form>

</body>
</html>
