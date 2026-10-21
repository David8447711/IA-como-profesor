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

// Pruebas para comprobar que funciona
echo generarSaludo("Ana", 9) . "<br>";
echo generarSaludo("Carlos", 16) . "<br>";
echo generarSaludo("Elena", 23) . "<br>";
?>