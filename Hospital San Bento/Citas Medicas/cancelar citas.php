<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Citas</title>
    <link rel="stylesheet" href="styleS.css">
</head>
<body>
    <div class="login-container"></div>

    <h1>Cancelar Cita</h1>
    <form id="appointment-form" action="#" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="1" required>
        </div>
        <div class="form-group">
            <label for="telefono">DPI:</label>
            <input type="number" id="dpi" name="dpi" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
            <label for="correo">Telefono:</label>
            <input type="number" id="telefono" name="Telefono" required>
        </div>
        <div class="form-group">
            <label for="medico">Médico:</label>
            <select id="medico" name="medico" required>
                <option value="" disabled selected>Seleccione un médico</option>
                <option value="Dr. López">Dr. López</option>
                <option value="Dra. Martínez">Dra. Martínez</option>
                <option value="Dr. García">Dr. García</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de la Cita:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora de la Cita:</label>
            <input type="time" id="hora" name="hora" required>
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad del Medico:</label>
            <input type="text" id="especialidad" name="especialidad" required>
        </div>
        <div class="form-group">
            <label for="motivo">Motivo de la Cita:</label>
            <textarea id="motivo" name="motivo" rows="4" required></textarea>
        </div>
        <button type="submit">Cancelar cita</button>
    </form>
</body>
</html>
