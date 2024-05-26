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
       
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informacion General</span>
                    <div class="input-group">
                        
                        <div class="input-field">
                            <input type="text" placeholder="Buscar Paciente">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Expediente Numero">
                        </div>
                        </div>
                    </div>
                    

                    <div class="fields">
                        <div class="input-field diagnosis-field">
                            <label>Frecuencia Cardiaca </label>
                            <textarea id="Frecuencia" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Frecuencia Respiratoria </label>
                            <textarea id="Respiratoria" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Frecuencia Arterial</label>
                            <textarea id="arterial" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Evolucion Medica </label>
                            <textarea id="evolucion" placeholder="" required></textarea>
                        </div>
                        
                            

                        <div class="input-field diagnosis-field">
                            <label>Ordenes Medica </label>
                            <textarea id="ordenes" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Procedimientos Quirurgico </label>
                            <textarea id="Resultados" placeholder="" required></textarea>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Motivo del Procedimiento</label>
                            <textarea id="procedimiento" placeholder="" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>Doctor que efectuo procedimiento</label>
                            <input type="text" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Fecha de la intervencion</label>
                            <input type="date" placeholder="" required>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Ordenes de Laboratorio </label>
                            <textarea id="laboratorio" placeholder="" required></textarea>
                        </div>

                        
                        <div class="input-field diagnosis-field">
                            <label>Resultados del Laboratorio </label>
                            <textarea id="Resultados" placeholder="" required></textarea>
                        </div>

                        <div class="input-field">
                            <label>Medico que Autorizo los Laboratorios</label>
                            <input type="text" placeholder="" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Fecha de Aurorizacion</label>
                            <input type="date" placeholder="" required>
                        </div>

                        <div class="input-field diagnosis-field">
                            <label>Examen Clinico </label>
                            <textarea id="Examen clinico" placeholder="" required></textarea>
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
            // Añadir evento de clic al header "historialPaciente"
            document.getElementById('historialPaciente').addEventListener('click', function() {
                window.location.href = '../paciente/index.php'; 
            });
            
            // Añadir evento de clic al div "information-parents"
            document.querySelector('.medicamentos').addEventListener('click', function() {
                window.location.href = '../medicamento/Medicamentos.php'; 
            });
        });
        </script>
        
</body>
</html>