<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reprogramar Cita Médica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Reprogramar Cita Médica</h1>
    <form id="reschedule-form" action="#" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="apellido">DPI:</label>
            <input type="text" id="dpi" name="dpi" required>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha Original de la Cita:</label>
            <input type="date" id="fecha" name="fecha_original" required>
        </div>
        <div class="form-group">
            <label for="motivo">Motivo de la Cita :</label>
            <textarea id="motivo" name="motivo_original" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="nueva_fecha">Nueva Fecha de la Cita:</label>
            <input type="date" id="nueva_fecha" name="nueva_fecha" required>
        </div>
        <div class="form-group">
            <label for="nueva_hora">Nueva Hora de la Cita:</label>
            <input type="time" id="nueva_hora" name="nueva_hora" required>
        </div>
        <button type="submit">Reprogramar Cita</button>
    </form>
</body>
</html>
