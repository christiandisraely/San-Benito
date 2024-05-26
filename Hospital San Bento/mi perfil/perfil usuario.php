<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        var camposHabilitados = false;

        function validarCamposLlenos() {
            var campos = ['username', 'email', 'phone', 'gender'];
            for (var i = 0; i < campos.length; i++) {
                var valor = document.getElementById(campos[i]).value;
                if (valor === '') {
                    alert('Todos los campos deben estar llenos antes de guardar.');
                    return false;
                }
            }
            return true;
        }

        function habilitarCampos() {
            if (!camposHabilitados) {
                camposHabilitados = true;
                var campos = ['username', 'email', 'phone', 'gender'];
                campos.forEach(function(campo) {
                    document.getElementById(campo).disabled = false;
                });
            } else {
                if (validarFormulario()) {
                    camposHabilitados = false;
                    var campos = ['username', 'email', 'phone', 'gender'];
                    campos.forEach(function(campo) {
                        document.getElementById(campo).disabled = true;
                    });
                }
            }
        }

        function deshabilitarCampos() {
            var campos = ['username', 'password', 'email', 'phone', 'gender'];
            campos.forEach(function(campo) {
                document.getElementById(campo).disabled = true;
            });
        }

        function validarFormulario() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var gender = document.getElementById('gender').value;

            if (!username.match(/^[a-zA-Z]+$/)) {
                alert('El campo de usuario solo debe contener letras.');
                return false;
            }

            if (!email.match(/^[^@]+@(gmail|hotmail)\.com$/)) {
                alert('Por favor, introduce un correo electrónico válido. Debe ser de gmail.com o hotmail.com.');
                return false;
            }

            if (!phone.match(/^\d+$/)) {
                alert('El campo de teléfono solo debe contener números.');
                return false;
            }

            if (gender === '') {
                alert('Por favor, selecciona una opción para el sexo.');
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Mi Perfil</h2>
        <form action="user/Registrar.php" method="post" onsubmit="return validarFormulario(); deshabilitarCampos();">
            <label for="username">Usuario:</label>
            <div class="input-with-icon">
                <input type="text" name="username" id="username" required disabled>
            </div>
            
            <label for="password">Contraseña:</label>
            <div class="input-with-icon">
                <input type="password" name="password" id="password" required disabled>
            </div>
            
            <label for="email">Correo Electrónico:</label>
            <div class="input-with-icon">
                <input type="email" name="email" id="email" required disabled>
            </div>
            
            <label for="phone">Teléfono:</label>
            <div class="input-with-icon">
                <input type="tel" name="phone" id="phone" required disabled>
            </div>
            
            <label for="gender">Sexo:</label>
            <select name="gender" id="gender" required disabled>
                <option value="">Selecciona...</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
            <br>
            
            <input type="button" class="actualizar" value="Actualizar" onclick="habilitarCampos()">
            <input type="button" class="cancelar" value="Cancelar" onclick="history.back()">
            
        </form>
    </div>
</body>
</html>




