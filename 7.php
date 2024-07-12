<?php
function convertirUnidades($metros, $opcion) {
    switch ($opcion) {
        case 1: // Centímetros
            return $metros * 100;
        case 2: // Kilómetros
            return $metros / 1000;
        case 3: // Pulgadas
            return $metros * 39.3701; 
        default:
            echo "Opción no válida. Debe ser 1, 2 o 3.\n";
            return false; 
    }
}

// Leer la entrada del usuario
$metros = readline("Introduce la cantidad en metros: ");
$opcion = readline("Elige la unidad de conversión (1: Centímetros, 2: Kilómetros, 3: Pulgadas): ");

// Convertir las entradas a números
$metros = (float)$metros;
$opcion = (int)$opcion;


$resultado = convertirUnidades($metros, $opcion);

if ($resultado !== false) {
    switch ($opcion) {
        case 1:
            echo "La cantidad en centímetros es: $resultado cm\n";
            break;
        case 2:
            echo "La cantidad en kilómetros es: $resultado km\n";
            break;
        case 3:
            echo "La cantidad en pulgadas es: $resultado in\n";
            break;
    }
}
?>
