<?php
// Función para dibujar un cuadrado
function dibujarCuadrado($lado) {
    for ($i = 0; $i < $lado; $i++) {
        for ($j = 0; $j < $lado; $j++) {
            echo "* ";
        }
        echo "\n"; // Nueva línea después de cada fila
    }
}

// Función para dibujar un triángulo
function dibujarTriangulo($lado) {
    for ($i = 1; $i <= $lado; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "\n"; // Nueva línea después de cada fila
    }
}

// Función principal para dibujar la figura según la opción
function dibujarFigura($tipo, $lado) {
    if ($tipo == 'cuadrado') {
        dibujarCuadrado($lado);
    } elseif ($tipo == 'triangulo') {
        dibujarTriangulo($lado);
    } else {
        echo "Tipo de figura no reconocido. Usa 'cuadrado' o 'triangulo'.\n";
    }
}

// Datos de entrada
$tipoFigura = 'cuadrado'; // Cambia esto a 'triangulo' para dibujar un triángulo
$lado = 5; // Tamaño del lado

// Llamada a la función para dibujar la figura
dibujarFigura($tipoFigura, $lado);
?>
