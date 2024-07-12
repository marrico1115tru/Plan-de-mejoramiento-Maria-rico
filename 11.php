<?php
// Leer el monto de la hipoteca desde la entrada estándar
$monto_hipoteca = (float)readline("Ingrese el monto de la hipoteca: ");

// Leer el monto total de inversión necesaria desde la entrada estándar
$monto_total_inversion = (float)readline("Ingrese el monto total de inversión necesaria: ");

// Inicializar las variables de inversión
$inversion_usuario = 0;
$inversion_socio = 0;

// Verificar el monto de la hipoteca y calcular las inversiones
if ($monto_hipoteca < 1000000) {
    // Caso cuando el monto de la hipoteca es menor a $1,000,000
    $inversion_usuario = $monto_total_inversion * 0.50;
    $inversion_socio = $monto_total_inversion * 0.50;
} else {
    // Caso cuando el monto de la hipoteca es $1,000,000 o más
    $inversion_usuario = $monto_hipoteca;
    $monto_faltante = $monto_total_inversion - $monto_hipoteca;
    $inversion_socio = $monto_faltante / 2;
}

// Mostrar los resultados en la consola
echo "Monto de la hipoteca: $" . $monto_hipoteca . "\n";
echo "Inversión del usuario: $" . $inversion_usuario . "\n";
echo "Inversión del socio: $" . $inversion_socio . "\n";
?>
