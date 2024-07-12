<?php
// Definir un número entero positivo de hasta tres cifras
$numero = readline("Digite un número: ");

// Asegurarse de que la entrada es un número entero
$numero = intval($numero);

// Verificar que el número está en el rango permitido
if ($numero < 0 || $numero > 999) {
    echo "El número ingresado no está dentro del rango permitido (0 a 999).\n";
    exit();
}

// Verificar la cantidad de cifras del número
if ($numero < 10) {
    echo "El número tiene 1 cifra.\n";
} elseif ($numero < 100) {
    echo "El número tiene 2 cifras.\n";
} else {
    echo "El número tiene 3 cifras.\n";
}
?>

