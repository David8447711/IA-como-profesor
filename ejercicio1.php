<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial; margin: 0;">

    <?php require 'menu.php'; ?>

    <div style="padding: 20px;">
        <h1>Generador de Saludos</h1>
        <?php
        function generarSaludo($nombre, $hora) {
            if ($hora >= 6 && $hora < 12) {
                return "¡Buenos días, $nombre!";
            } elseif ($hora >= 13 && $hora <= 20) {
                return "¡Buenas tardes, $nombre!";
            } else {
                return "¡Buenas noches, $nombre!";
            }
        }

        echo generarSaludo("Ana", 9) . "<br>";
        echo generarSaludo("Carlos", 16) . "<br>";
        echo generarSaludo("Elena", 23) . "<br>";
        ?>
    </div>

</body>
</html>