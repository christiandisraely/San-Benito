<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial del Paciente</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <header>
            <header id="historialPaciente" class="clickable-header">Historial del Paciente</header>
            <div class="medicamentos" onclick="openModal()">Medicamentos </div>
            <div class="informacion" onclick="openMoreInfoModal()">Más Información</div>
        </header>  
       
        <form action="paciente.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Detalles</span>
                    <div class="input-group">
                        
                        <div class="input-field">
                            <input type="text" placeholder="Buscar Paciente" id="BuscarPaciente">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Expediente Numero" id="ExpedienteNumero">
                        </div>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="input-field">
                            <label>Codigo Del paciente</label>
                            <input type="text" placeholder="" id="Codigo"required>
                        </div>

                        <div class="input-field">
                            <label>Nombre completo</label>
                            <input type="text" placeholder="" id="Nombre" required>
                        </div>

                        <div class="input-field">
                            <label>Genero</label>
                            <select id="Genero"required>
                                <option disabled selected>Seleccione una opcion</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Edad</label>
                            <input type="number" placeholder="" id="Edad" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de Ingreso</label>
                            <input type="date" placeholder="" id="FechaIngreso"required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de Alta</label>
                            <input type="date" placeholder="" id="FechaAlta"> 
                        </div>

                        <div class="input-field">
                            <label>Fecha de Nacimiento</label>
                            <input type="Date" placeholder="" id="FechaNacimiento" required>
                        </div>

                        <div class="input-field">
                            <label>Grupo Sanguineo</label>
                            <input type="text" placeholder="" id="Sangre"required>
                        </div>

                        <div class="input-field">
                            <label for="hora">Hora de Ingreso</label>
                            <input type="time" placeholder="" id="HoraIngreso" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Numero de Cama</label>
                            <input type="number" placeholder="" id="NoCama" required>
                        </div>

                        <div class="input-field">
                            <label>Medico A Cargo</label>
                            <input type="text" placeholder="" id="Medico" required>
                        </div>
                        
                        <div class="input-field diagnosis-field">
                            <label>Diagnóstico </label>
                            <textarea id="diagnosisInput" placeholder="" required></textarea>
                        </div>
                        
                        <div class="input-field">
                            <label>Departamento</label>
                            <select id="Departamento" required>
                                <option disabled selected>Seleccione una opcion</option>
                                <option>Cirujia</option>
                                <option>Traumatologia</option>
                                <option>Medicina Interna</option>
                                <option>Pediatria</option>
                                <option>Dermatologia</option>
                                
                            </select>

                        </div>
                        <div class="input-field">
                            <label>Habitacion</label>
                            <input type="number" placeholder="" id="Habitacion"required>
                        </div>
                        
                        <div class="input-field diagnosis-field">
                            <label>Antecedentes medicos</label>
                            <textarea id="Antecedente" placeholder="" required></textarea>
                        </div>
                        <div class="input-field diagnosis-field">
                            <label>Antecedentes del Paciente</label>
                            <textarea id="paciente" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Observaciones</label>
                            <textarea id="Observaciones" placeholder="" required></textarea>
                        </div>
                       

                        <div class="buttons">
                            <div class="backBtn" onclick="resetDiagnosis()">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">eliminar</span>
                            </div>
                            
                            <button class="submit guardarBtn">
                                <span class="btnText">Guardar</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        
                            <button class="submit buscarBtn">
                                <span class="btnText">Buscar</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
        </div>  
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Añadir evento de clic al div "information-parents" para abrir el modal de medicamentos
            document.querySelector('.medicamentos').addEventListener('click', function() {
                window.location.href = '../medicamento/Medicamentos.php'; 
            });
            
            // Añadir evento de clic al div "information-parent" para abrir el modal de más información
            document.querySelector('.informacion').addEventListener('click', function() {
                window.location.href = '../informacion/informacion.php'; 
            });
        });
        </script>
        
</body>
</html>
