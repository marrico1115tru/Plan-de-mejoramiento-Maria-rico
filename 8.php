<?php
// Leer datos de entrada
$capital = readline("Ingrese la cantidad de dinero invertida en el banco: ");
$tasa_interes_anual = readline("Ingrese la tasa de interés anual (en porcentaje): ");
$periodos = readline("Ingrese el número de años de inversión: ");

// Convertir datos de entrada a números adecuados
$capital = (float)$capital;
$tasa_interes_anual = (float)$tasa_interes_anual / 100; // Convertir porcentaje a decimal
$periodos = (int)$periodos;

// Inicializar el monto final con el capital inicial
$monto_final = $capital;

// Calcular el monto final con interés compuesto usando un bucle
for ($i = 0; $i < $periodos; $i++) {
    $monto_final += $monto_final * $tasa_interes_anual;
}

// Calcular los intereses generados
$interes_total = $monto_final - $capital;

// Evaluar si los intereses exceden $7000
if ($interes_total > 7000) {
    echo "Los intereses generados son mayores a $7000.\n";
    echo "Monto final en la cuenta después de reinvertir los intereses: $" . $monto_final . "\n";
} else {
    echo "Los intereses generados son: $" . $interes_total . "\n";
    echo "El monto final en la cuenta sin reinversión de intereses es: $" . ($capital + $interes_total) . "\n";
}
?>
