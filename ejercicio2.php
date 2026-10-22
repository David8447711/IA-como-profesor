<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial; margin: 0;">

    <?php require 'menu.php'; ?>

    <div style="padding: 20px;">
        <h1>Analizador de Notas</h1>
        <?php
        $notas = [4, 7, 9, 3, 6];
        $suma = 0;
        $totalNotas = count($notas);

        echo "Notas individuales: ";
        foreach ($notas as $nota) {
            echo "$nota ";
            $suma += $nota;
        }

        $media = $suma / $totalNotas;
        echo "<br><strong>Nota media resultante:</strong> $media<br>";

        if ($media >= 5) {
            echo "Resultado: ¡El alumno ha aprobado!";
        } else {
            echo "Resultado: El alumno ha suspendido.";
        }
        ?>
    </div>

</body>
</html>