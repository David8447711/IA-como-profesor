<?php
require 'menu.php';

$notas = [3, 8, 8, 4, 5];
$suma = 0;
$totalNotas = count($notas);

echo "Notas del alumno: ";
foreach ($notas as $nota) {
    echo "$nota ";
    $suma += $nota;
}

$media = $suma / $totalNotas;
echo "<br>Nota media: $media<br>";

if ($media >= 5) {
    echo "¡El alumno ha aprobado!";
} else {
    echo "El alumno ha suspendido.";
}
?>