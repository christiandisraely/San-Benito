<?php

$conexion = new mysqli("localhost", "root", "", "Hospital");

if($conexion->connect_error){
    die("Error en la conexion: " . $conexion->connect_error);
}

$numeroFactura = $_POST['numeroFactura'];
$fechaEmision = $_POST['fechaEmision'];
$fechaVencimiento = $_POST['fechaVencimiento'];
$nombreCompleto = $_POST['nombreCompleto'];
$direccion = $_POST['direccion'];
$nit = $_POST['nit'];
$detallesProducto = $_POST['detallesProducto'];
$cantidad = $_POST['cantidad'];
$descuento = $_POST['descuento'];
$precio = $_POST['precio'];
$total = $_POST['total'];
$estadoPago = $_POST['estadoPago'];



// Preparar la sentencia SQL con marcadores de posición
$sql = "INSERT INTO facturas (numero_factura, fecha_emision, fecha_vencimiento, nombre_completo, direccion, nit, detalles_producto, cantidad, descuento, precio_unitario, total, estado_pago) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar la sentencia
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la sentencia: " . $conexion->error);
}

// Bindear los parámetros a los marcadores de posición
$stmt->bind_param(
    "sssssssidids", 
    $numeroFactura, 
    $fechaEmision, 
    $fechaVencimiento, 
    $nombreCompleto, 
    $direccion, 
    $nit, 
    $detallesProducto, 
    $cantidad, 
    $descuento, 
    $precio, 
    $total, 
    $estadoPago
);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "<script type='text/javascript'>
    alert('Factura creada');
    window.location.href = 'factura.php';
    </script>";
} else {
    echo "Error al registrar factura: " . $stmt->error;
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conexion->close();

?>
