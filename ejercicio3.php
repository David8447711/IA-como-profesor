<?php
$producto = [
    "nombre" => "Teclado Mecánico",
    "precio" => 45.99,
    "stock" => 5
];

function mostrarEstadoProducto($prod) {
    $nombre = $prod["nombre"];
    $precio = $prod["precio"];
    $stock = $prod["stock"];

    if ($stock > 10) {
        echo "El producto $nombre está disponible. Precio: {$precio}€";
    } elseif ($stock > 0 && $stock <= 10) {
        echo "¡Últimas unidades! Solo quedan $stock unidades de $nombre";
    } else {
        echo "Producto agotado";
    }
}

mostrarEstadoProducto($producto);
?>