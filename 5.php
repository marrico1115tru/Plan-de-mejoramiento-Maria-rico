<?php
// Función para determinar el cuadrante
function determinarCuadrante($x, $y) {
    if ($x > 0) {
        if ($y > 0) {
            return "1º Cuadrante";
        } elseif ($y < 0) {
            return "4º Cuadrante";
        } else { // y == 0
            return "Eje X";
        }
    } elseif ($x < 0) {
        if ($y > 0) {
            return "2º Cuadrante";
        } elseif ($y < 0) {
            return "3º Cuadrante";
        } else { // y == 0
            return "Eje X";
        }
    } else { // x == 0
        if ($y != 0) {
            return "Eje Y";
        } else {
            return "Origen";
        }
    }
}

// Leer la entrada del usuario
$x = readline("Introduce la coordenada x: ");
$y = readline("Introduce la coordenada y: ");

// Convertir las entradas a enteros
$x = (int)$x;
$y = (int)$y;

// Determinar el cuadrante
$cuadrante = determinarCuadrante($x, $y);

// Mostrar el resultado en consola
echo "El punto ($x, $y) está en el $cuadrante.\n";
?>

