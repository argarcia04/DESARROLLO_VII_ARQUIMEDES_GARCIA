<?php

// Función para leer el inventario desde el archivo JSON
function leerInventario($archivo) {
    $contenido = file_get_contents($archivo);
    return json_decode($contenido, true); // Convertimos el JSON a un array asociativo
}

// Función para ordenar el inventario alfabéticamente por nombre del producto
function ordenarInventario(&$inventario) {
    usort($inventario, function($a, $b) {
        return strcmp($a['nombre'], $b['nombre']);
    });
}

// Función para mostrar un resumen del inventario ordenado (nombre, precio, cantidad)
function mostrarResumen($inventario) {
    echo "Resumen del Inventario:\n";
    echo "-----------------------\n";
    foreach ($inventario as $producto) {
        echo "Nombre: " . $producto['nombre'] . "\n";
        echo "Precio: $" . $producto['precio'] . "\n";
        echo "Cantidad: " . $producto['cantidad'] . "\n";
        echo "-----------------------\n";
    }
}

// Función para calcular el valor total del inventario
function calcularValorTotal($inventario) {
    return array_sum(array_map(function($producto) {
        return $producto['precio'] * $producto['cantidad'];
    }, $inventario));
}

// Función para generar un informe de productos con stock bajo (menos de 5 unidades)
function informeStockBajo($inventario, $umbral = 5) {
    $productosBajoStock = array_filter($inventario, function($producto) use ($umbral) {
        return $producto['cantidad'] < $umbral;
    });

    if (empty($productosBajoStock)) {
        echo "No hay productos con stock bajo.\n";
    } else {
        echo "Informe de productos con stock bajo:\n";
        echo "-----------------------------------\n";
        foreach ($productosBajoStock as $producto) {
            echo "Nombre: " . $producto['nombre'] . "\n";
            echo "Cantidad: " . $producto['cantidad'] . "\n";
            echo "-----------------------------------\n";
        }
    }
}

// Script principal
$archivoInventario = 'inventario.json';

// Leer el inventario
$inventario = leerInventario($archivoInventario);

// Ordenar el inventario
ordenarInventario($inventario);

// Mostrar el resumen del inventario
mostrarResumen($inventario);

// Calcular y mostrar el valor total del inventario
$valorTotal = calcularValorTotal($inventario);
echo "Valor total del inventario: $" . $valorTotal . "\n";

// Generar el informe de stock bajo
informeStockBajo($inventario);

?>
