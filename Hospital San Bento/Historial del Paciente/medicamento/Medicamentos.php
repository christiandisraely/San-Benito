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
                    <span class="title">Tratamiento Medico</span>
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
                        
                            <div class="input-field">
                                <label>Nombre de la enfermera (o)</label>
                                <input type="text" placeholder="" required>
                            </div>
                            
                                <div class="input-field">
                                    <label>Horario de Entrada</label>
                                    <input type="date" placeholder="" required>
                                </div>

                                <div class="input-field">
                                    <label>Hoario de Salida</label>
                                    <input type="date" placeholder="" required>
                                </div>

                                <div class="input-field">
                                    <label>Nombre del Medicamento</label>
                                    <input type="text" placeholder="" required>
                                </div>
                        
                            

                                <div class="input-field">
                                    <label>Fecha de Inicio</label>
                                    <input type="date" placeholder="" required>
                                </div>

                                <div class="input-field">
                                    <label>Fecha de Fin</label>
                                    <input type="date" placeholder="" required>
                                </div>

                                <div class="input-field">
                                    <label>Hora de Administracion</label>
                                    <input type="time" placeholder="" required>
                                </div>

                                <div class="input-field diagnosis-field">
                                    <label>Dosis </label>
                                    <textarea id="Dosis" placeholder="" required></textarea>
                                </div>

                                <div class="input-field">
                                    <label>Via de Administracion </label>
                                    <select required>
                                        <option disabled selected>Seleccione una opcion</option>
                                        <option>Oral</option>
                                        <option>Sublingual</option>
                                        <option>Bucal</option>
                                        <option>Rectal</option>
                                        <option>Intra Venoso</option>
                                        <option>Sub Cutanea</option>
                                        <option>Intra Muscular</option>
                                        
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label>Frecuencia </label>
                                    <select required>
                                        <option disabled selected>Seleccione una opcion</option>
                                        <option>cada 24 horas</option>
                                        <option>cada 12 horas</option>
                                        <option>cada 6 horas</option>
                                        <option>cada 8 horas </option>
                                        <option>cada 4 horas</option>
                                        
                                        
                                    </select>
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
            document.querySelector('.informacion').addEventListener('click', function() {
                window.location.href = '../informacion/informacion.php'; 
            });
        });

  
    </script>
</body>
</html>