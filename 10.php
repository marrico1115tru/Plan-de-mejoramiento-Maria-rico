<?php
// Leer la edad desde la entrada estándar
$edad = (int)readline("Ingrese su edad: ");

// Leer el sexo desde la entrada estándar
$sexo = readline("Ingrese su sexo (femenino/masculino): ");

// Inicializar variable para el número de pulsaciones
$pulsaciones = 0;

// Verificar el sexo y calcular las pulsaciones
if ($sexo === 'femenino') {
    $pulsaciones = (220 - $edad) / 10;
} elseif ($sexo === 'masculino') {
    $pulsaciones = (210 - $edad) / 10;
} else {
    echo "Sexo no reconocido. Por favor ingrese 'femenino' o 'masculino'.\n";
    exit();
}

// Mostrar el resultado en la consola
echo "Número de pulsaciones por cada 10 segundos de ejercicio aeróbico: " . $pulsaciones . "\n";
?>

