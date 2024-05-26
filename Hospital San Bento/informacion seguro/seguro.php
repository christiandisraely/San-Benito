<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Seguro Médico</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <form class="form-container">
      <h2>Información del Seguro Médico</h2>
      
      <div class="form-row">
        <label for="nombre">Nombre Completo:</label><br>
        <input type="text" id="nombre" name="nombre" class="input-with-icon" disabled><br>
        
        <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="input-with-icon" disabled><br>
        
        <label for="genero">Género:</label><br>
        <select id="genero" name="genero" class="input-with-icon" disabled>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select><br>
        
        <label for="numeroPoliza">DPI:</label><br>
        <input type="text" id="DPI" name="DPI" class="input-with-icon" disabled><br>
        
        <label for="tipoPlan">Tipo de Plan de Seguro:</label><br>
        <select id="tipoPlan" name="tipoPlan" class="input-with-icon" disabled>
          <option value="individual">Individual</option>
          <option value="familiar">Familiar</option>
          <option value="grupo">Grupo</option>
        </select><br>
        
        <label for="fechaInicio">Fecha de Inicio de la Póliza:</label><br>
        <input type="date" id="fechaInicio" name="fechaInicio" class="input-with-icon" disabled><br>
      </div>
      
      <div class="form-row">
        <label for="fechaFin">Fecha de Fin de la Póliza:</label><br>
        <input type="date" id="fechaFin" name="fechaFin" class="input-with-icon" disabled><br>
        
        <label for="cobertura">Cobertura del Seguro:</label><br>
        <select id="cobertura" name="cobertura" class="input-with-icon" disabled>
          <option value="opcion1">seleciona una opcion</option>
          <option value="opcion2">accidente automovilistico</option>
          <option value="opcion3">Hospitalizacion</option>
          <option value="opcion4">parto</option>
        </select><br>
        
        <label for="prima">Primas del Seguro:</label><br>
        <input type="number" id="prima" name="prima" class="input-with-icon" disabled><br>
        
        <label for="deducible">Deducible:</label><br>
        <input type="number" id="deducible" name="deducible" class="input-with-icon" disabled><br>
        
        <label for="copago">Numero de poliza:</label><br>
        <input type="number" id="numero" name="numero" class="input-with-icon" disabled><br>
        
        <label for="maximoDesembolso">Máximo de Desembolso:</label><br>
        <input type="number" id="maximoDesembolso" name="maximoDesembolso" class="input-with-icon" disabled><br>
      </div>
      
      <input type="submit" value="Guardar">
      <input type="button" class="cancelar" value="Cancelar" onclick="history.back()">
    </form>
</body>
</html>

