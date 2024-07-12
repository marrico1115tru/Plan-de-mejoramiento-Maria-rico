<?php
// Función para convertir un número binario a decimal
function binarioADecimal($binario) {
    $decimal = 0;
    $longitud = 0;

    // Calcular la longitud de la cadena binaria
    while (isset($binario[$longitud])) {
        $longitud++;
    }

    // Procesar cada dígito del número binario
    for ($i = 0; $i < $longitud; $i++) {
        // Obtenemos el carácter actual del binario
        $caracter = $binario[$i];
        
        // Si el carácter es '1', calculamos su valor decimal
        if ($caracter == '1') {
            // La posición actual es (longitud - 1 - i) porque estamos leyendo de izquierda a derecha
            $potencia = $longitud - 1 - $i;
            $valor = 1;
            
            // Calcular 2^potencia manualmente
            for ($j = 0; $j < $potencia; $j++) {
                $valor *= 2;
            }

            // Sumar al resultado decimal
            $decimal += $valor;
        }
    }
    return $decimal;
}

// Número binario de ejemplo
$binario = "1101"; // Puedes cambiar este valor para probar otros números binarios

// Convertir el número binario a decimal
$decimal = binarioADecimal($binario);

// Mostrar el resultado en consola
echo "Número binario: $binario\n";
echo "Número decimal: $decimal\n";
?>
