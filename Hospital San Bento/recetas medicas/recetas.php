<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas de laboratorio </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Recetas Medicas</h2>
    <form>
        <div>
            <label for="patientName">Nombre del Paciente:</label><br>
            <input type="text" id="patientName" name="patientName" disabled><br>
            <label for="age">Edad:</label><br>
            <input type="number" id="age" name="age" disabled><br>
            <label for="birthYear">Año de Nacimiento:</label><br>
            <input type="date" id="birthYear" name="birthYear" disabled><br>
            <label for="prescriptionDate">Fecha de la Receta:</label><br>
            <input type="date" id="prescriptionDate" name="prescriptionDate" disabled><br>
            <label for="medicineName">Nombre del Medicamento:</label><br>
            <input type="text" id="medicineName" name="medicineName" disabled><br>
        </div>
        <div>
            <label for="dose">Dosis:</label><br>
            <input type="text" id="dose" name="dose" disabled><br>
            <label for="doctorName">Nombre del Médico:</label><br>
            <select id="doctorName" name="doctorName" disabled>
                <option value="doctor1">seleccione una opcion</option>
                <option value="doctor2">Alfonso Ramires</option>
                <option value="doctor3">Alfredo Gomez</option>
                <option value="doctor4">Ana Maria</option>
                <option value="doctor5">Etelvina Ordoñez</option>
            </select><br>
            <label for="specialInstructions">Instrucciones Especiales:</label><br>
            <textarea id="specialInstructions" name="specialInstructions" disabled></textarea><br>
            <label for="nextAppointment">Fecha de Siguiente Cita:</label><br>
            <input type="date" id="nextAppointment" name="nextAppointment" disabled><br>
        </div>
    </form>
</body>
</html>
