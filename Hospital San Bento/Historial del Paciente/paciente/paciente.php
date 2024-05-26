<?php
// Verificar si se han enviado datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están definidos en $_POST antes de acceder a ellos
    $codigo = isset($_POST['Codigo']) ? $_POST['Codigo'] : '';
    $nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
    $genero = isset($_POST['Genero']) ? $_POST['Genero'] : '';
    $edad = isset($_POST['Edad']) ? $_POST['Edad'] : '';
    $fechaIngreso = isset($_POST['FechaIngreso']) ? $_POST['FechaIngreso'] : '';
    $fechaAlta = isset($_POST['FechaAlta']) ? $_POST['FechaAlta'] : '';
    $fechaNacimiento = isset($_POST['FechaNacimiento']) ? $_POST['FechaNacimiento'] : '';
    $grupoSanguineo = isset($_POST['Sangre']) ? $_POST['Sangre'] : '';
    $horaIngreso = isset($_POST['HoraIngreso']) ? $_POST['HoraIngreso'] : '';
    $noCama = isset($_POST['NoCama']) ? $_POST['NoCama'] : '';
    $medico = isset($_POST['Medico']) ? $_POST['Medico'] : '';
    $diagnostico = isset($_POST['diagnosisInput']) ? $_POST['diagnosisInput'] : '';
    $departamento = isset($_POST['Departamento']) ? $_POST['Departamento'] : '';
    $habitacion = isset($_POST['Habitacion']) ? $_POST['Habitacion'] : '';
    $antecedentesMedicos = isset($_POST['Antecedente']) ? $_POST['Antecedente'] : '';
    $antecedentesPaciente = isset($_POST['paciente']) ? $_POST['paciente'] : '';
    $observaciones = isset($_POST['Observaciones']) ? $_POST['Observaciones'] : '';

    // Conectar a la base de datos (modifica los valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Hospital";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO HistorialPaciente  (codigo_paciente, nombre_completo, genero, edad, fecha_ingreso, fecha_alta, fecha_nacimiento, grupo_sanguineo, hora_ingreso, numero_cama, medico_a_cargo, diagnostico, departamento, habitacion, antecedentes_medicos, antecedentes_paciente, observaciones)
    VALUES ('$codigo', '$nombre', '$genero', '$edad', '$fechaIngreso', '$fechaAlta', '$fechaNacimiento', '$grupoSanguineo', '$horaIngreso', '$noCama', '$medico', '$diagnostico', '$departamento', '$habitacion', '$antecedentesMedicos', '$antecedentesPaciente', '$observaciones')";

    if ($conn->query($sql) === TRUE) {
       header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
