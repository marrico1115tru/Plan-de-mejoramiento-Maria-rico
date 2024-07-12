<?php

function calcularSueldo($sueldo, $antiguedad) {
    if ($sueldo < 500) {
        if ($antiguedad >= 10) {
            
            $nuevoSueldo = $sueldo * 1.20;
        } else {
            
            $nuevoSueldo = $sueldo * 1.05;
        }
    } else {
        // 
        $nuevoSueldo = $sueldo;
    }
    return $nuevoSueldo;
}

// Leer la entrada del usuario
$sueldo = readline("Introduce el sueldo del operario: ");
$antiguedad = readline("Introduce los años de antigüedad del operario: ");


$sueldo = (float)$sueldo;
$antiguedad = (int)$antiguedad;

// Calcular el sueldo ajustado
$sueldoAjustado = calcularSueldo($sueldo, $antiguedad);

// Mostrar el resultado en consola
echo "El sueldo ajustado es: $sueldoAjustado\n";
?>
