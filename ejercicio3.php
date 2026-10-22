<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial; margin: 0;">

    <?php require 'menu.php'; ?>

    <div style="padding: 20px;">
        <h1>Catálogo de Productos</h1>
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
                echo "¡Últimas unidades! Solo quedan $stock unidades de $nombre (Precio: {$precio}€)";
            } else {
                echo "Producto agotado";
            }
        }

        mostrarEstadoProducto($producto);
        ?>
    </div>

</body>
</html>