<?php

$nombre = readline("Introduce el nombre del postulante: ");
$totalPreguntas = (int)readline("Introduce la cantidad total de preguntas: ");

$correctas = (int)readline("Introduce la cantidad de preguntas contestadas correctamente: ");

if ($totalPreguntas <= 0) {
    echo "La cantidad total de preguntas debe ser mayor que cero.\n";
    exit();
}

if ($correctas > $totalPreguntas) {
    echo "La cantidad de preguntas correctas no puede ser mayor que la cantidad total de preguntas.\n";
    exit();
}

$porcentaje = ($correctas / $totalPreguntas) * 100;


if ($porcentaje >= 90) {
    $nivel = "Nivel superior";
} elseif ($porcentaje >= 75) {
    $nivel = "Nivel medio";
} elseif ($porcentaje >= 50) {
    $nivel = "Nivel regular";
} else {
    $nivel = "Fuera de nivel";
}

// Imprimir el resultado
echo "Nombre del postulante: $nombre\n";
echo "Porcentaje de respuestas correctas: $porcentaje%\n";
echo "Nivel del postulante: $nivel\n";
?>
