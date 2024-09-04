<?php
include 'funciones_tienda.php';

$productos = [
    'camisa' => 50,
    'pantalon' => 70,
    'zapatos' => 80,
    'calcetines' => 10,
    'gorra' => 25
];
//agregamos la sugerencia
$carrito = [
    'camisa' => 2,
    'pantalon' => 1,
    'zapatos' => 1,
    'calcetines' => 3,
    'gorra' => 0
];

$subtotal = 0;
foreach ($carrito as $producto => $cantidad) {
    if ($cantidad > 0) {
        $subtotal += $productos[$producto] * $cantidad;
    }
}

$descuento = calcular_descuento($subtotal);
$impuesto = aplicar_impuesto($subtotal);
$total = calcular_total($subtotal, $descuento, $impuesto);


echo "<h2>Resumen de la Compra</h2>";
echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Total</th></tr>";

foreach ($carrito as $producto => $cantidad) {
    if ($cantidad > 0) {
        $precio_unitario = $productos[$producto];
        $total_producto = $precio_unitario * $cantidad;
        echo "<tr>";
        echo "<td>{$producto}</td>";
        echo "<td>{$cantidad}</td>";
        echo "<td>\${$precio_unitario}</td>";
        echo "<td>\${$total_producto}</td>";
        echo "</tr>";
    }
}


$detalles_compra = [
    'Subtotal' => $subtotal,

    'Descuento aplicado' => $descuento,

    'Impuesto' => $impuesto,
    
    'Total a pagar' => $total
];

foreach ($detalles_compra as $detalle => $valor) {
    echo "<p><strong>{$detalle}:</strong> \${$valor}</p>";
}
?>
