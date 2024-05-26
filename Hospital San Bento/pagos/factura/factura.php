<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="contenedor-login">
        <h2>Factura</h2>
        <form id="myForm" action="guardar.php" method="post">
            <!-- Primera fila -->
            <div class="row">
                <div class="column">
                    <label for="numeroFactura">Número de factura:</label><br>
                    <input type="text" id="numeroFactura" name="numeroFactura" readonly><br>
                </div>
                <div class="column">
                    <label for="fechaEmision">Fecha de emisión:</label><br>
                    <input type="text" id="fechaEmision" name="fechaEmision" placeholder="AAAA-MM-DD" ><br></div>
            </div>
            <!-- Segunda fila -->
            <div class="row">
            <div class="column">
                    <label for="fechaVencimiento">Fecha de vencimiento:</label><br>
                    <input type="text" id="fechaVencimiento" name="fechaVencimiento"placeholder="AAAA-MM-DD" ><br>
                </div>
                <div class="column">
                    <label for="nombreCompleto">Nombre completo:</label><br>
                    <input type="text" id="nombreCompleto" name="nombreCompleto" required><br>
                </div>
            </div>
            <!-- Tercera fila -->
            <div class="row">
                <div class="column">
                    <label for="direccion">Dirección:</label><br>
                    <input type="text" id="direccion" name="direccion" required><br>
                </div>
                <div class="column">
                    <label for="nit">NIT:</label><br>
                    <input type="number" id="nit" name="nit" required><br>
                </div>
            </div>
            <!-- Descripción en el medio -->
            <label for="detallesProducto">Descripción:</label><br>
            <textarea id="detallesProducto" name="detallesProducto" required></textarea><br>
            <!-- Cuarta fila -->
            <div class="row">
                <div class="column">
                    <label for="cantidad">Cantidad:</label><br>
                    <input type="number" id="cantidad" name="cantidad" required><br>
                    <label for="descuento">Descuento (%):</label><br>
                    <input type="number" id="descuento" name="descuento" required><br>
                </div>
                <div class="column">
                    <label for="precio">Precio uni.</label><br>
                    <input type="number" id="precio" name="precio" required><br>
                    <label for="total">Total:</label><br>
                    <input type="number" id="total" name="total" readonly><br>
                </div>
            </div>
            <label for="estadoPago">Estado de pago:</label><br>
            <select id="estadoPago" name="estadoPago" required>
                <option value="pagado">Pagado</option>
                <option value="nopagado">No pagado</option>
            </select><br>
            <input type="submit" value="Generar Factura">
            <input type="button" value="Cancelar" onclick="window.location.reload();">
        </form>
    </div>
    <script>
        $(document).ready(function(){
            // Verifica si ya existe un número de factura guardado, si no, comienza con 1
            var invoiceNumber = localStorage.getItem('invoiceNumber') ? parseInt(localStorage.getItem('invoiceNumber')) : 1;

            $("#myForm").on("submit", function(e){
                e.preventDefault();
                
                // Generar fechas antes de enviar el formulario
                var today = new Date();
                var dueDate = new Date();
                dueDate.setDate(today.getDate() + 10);
                $("#numeroFactura").val(invoiceNumber);
                $("#fechaEmision").val(formatDate(today));
                $("#fechaVencimiento").val(formatDate(dueDate));

                // Calcular el total
                var cantidad = $("#cantidad").val();
                var precioUnitario = $("#precio").val();
                var descuentoPorcentaje = $("#descuento").val();
                var subtotal = cantidad * precioUnitario;
                var descuento = subtotal * (descuentoPorcentaje / 100);
                var total = subtotal - descuento;
                $("#total").val(total.toFixed(2));

                // Guarda el número de factura incrementado en localStorage
                localStorage.setItem('invoiceNumber', invoiceNumber + 1);
                
                // Enviar el formulario al servidor
                this.submit();
            });
        });

        function formatDate(date) {
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            return pad(year)+ '/' + pad(month) + '/' + day;
        }

        function pad(n) {
            return n < 10 ? '0' + n : n;
        }
    </script>
</body>
</html>
