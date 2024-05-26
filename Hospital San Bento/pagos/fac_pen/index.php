<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Tabla</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="search-container">
        <h2>Buscar Facturas</h2>
        <form method="GET" action="index.php">
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo">
            </div>
            <div class="form-group">
                <label for="fecha_emision">Fecha de Emisión:</label>
                <input type="date" id="fecha_emision" name="fecha_emision">
            </div>
            <div class="form-group">
                <label for="nit">NIT:</label>
                <input type="text" id="nit" name="nit">
            </div>
            <div class="form-group">
                <label for="estado_pago">Estado de Pago:</label>
                <input type="text" id="estado_pago" name="estado_pago">
            </div>
            <button type="submit">Buscar</button>
        </form>
    </div>

    <div class="table-container">
        <table id="datosTabla">
            <thead>
                <tr>
                    <th>Número de Factura</th>
                    <th>Fecha de Emisión</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Nombre Completo</th>
                    <th>Dirección</th>
                    <th>NIT</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio Inicial</th>
                    <th>Descuento</th>
                    <th>Total</th>
                    <th>Estado de Pago</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';

                // Recoger parámetros de búsqueda
                $nombre_completo = isset($_GET['nombre_completo']) ? $_GET['nombre_completo'] : '';
                $fecha_emision = isset($_GET['fecha_emision']) ? $_GET['fecha_emision'] : '';
                $nit = isset($_GET['nit']) ? $_GET['nit'] : '';
                $estado_pago = isset($_GET['estado_pago']) ? $_GET['estado_pago'] : '';

                // Construir la consulta SQL con filtros
                $sql = "SELECT numero_factura, fecha_emision, fecha_vencimiento, nombre_completo, direccion, nit, detalles_producto, cantidad, descuento, precio_unitario, total, estado_pago FROM facturas WHERE 1=1";

                if ($nombre_completo) {
                    $sql .= " AND nombre_completo LIKE '%" . $conn->real_escape_string($nombre_completo) . "%'";
                }
                if ($fecha_emision) {
                    $sql .= " AND fecha_emision = '" . $conn->real_escape_string($fecha_emision) . "'";
                }
                if ($nit) {
                    $sql .= " AND nit LIKE '%" . $conn->real_escape_string($nit) . "%'";
                }
                if ($estado_pago) {
                    $sql .= " AND estado_pago LIKE '%" . $conn->real_escape_string($estado_pago) . "%'";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["numero_factura"] . "</td>";
                        echo "<td>" . $row["fecha_emision"] . "</td>";
                        echo "<td>" . $row["fecha_vencimiento"] . "</td>";
                        echo "<td>" . $row["nombre_completo"] . "</td>";
                        echo "<td>" . $row["direccion"] . "</td>";
                        echo "<td>" . $row["nit"] . "</td>";
                        echo "<td>" . $row["detalles_producto"] . "</td>";
                        echo "<td>" . $row["cantidad"] . "</td>";
                        echo "<td>" . $row["precio_unitario"] . "</td>";
                        echo "<td>" . $row["descuento"] . "</td>";
                        echo "<td>" . $row["total"] . "</td>";
                        echo "<td>" . $row["estado_pago"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>No se encontraron resultados</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
