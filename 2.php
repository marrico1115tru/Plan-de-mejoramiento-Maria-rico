<?php
$numero1 = readline("Introduce el primer número: ");
$numero2 = readline("Introduce el segundo número: ");

// Convertir los inputs a números flotantes
$numero1 = (float)$numero1;
$numero2 = (float)$numero2;

// Verificar cuál número es mayor
if ($numero1 > $numero2) {
    // Calcular suma y diferencia
    $suma = $numero1 + $numero2;
    $diferencia = $numero1 - $numero2;

    // Mostrar los resultados
    echo "El primer número es mayor al segundo.\n";
    echo "La suma de $numero1 y $numero2 es: $suma\n";
    echo "La diferencia entre $numero1 y $numero2 es: $diferencia\n";
} else {
    // Verificar si el segundo número no es cero para evitar división por cero
    if ($numero2 != 0) {
        // Calcular producto y división
        $producto = $numero1 * $numero2;
        $division = $numero1 / $numero2;

        // Mostrar los resultados
        echo "El primer número no es mayor al segundo.\n";
        echo "El producto de $numero1 y $numero2 es: $producto\n";
        echo "La división de $numero1 entre $numero2 es: $division\n";
    } else {
        echo "No se puede dividir por cero.\n";
    }
}
?>
