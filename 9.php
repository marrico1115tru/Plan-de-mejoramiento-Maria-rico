<?php
// Leer el monto total de la compra desde la entrada estándar
$monto_total = (float)readline("Ingrese el monto total de la compra: ");

// Definir el límite para el monto de compra
$limite = 500000;

// Inicializar variables
$inversion_propietario = 0;
$prestamo_banco = 0;
$credito_fabricante = 0;
$intereses_credito_fabricante = 0;

// Verificar si el monto total excede el límite
if ($monto_total > $limite) {
    // Cálculo cuando el monto excede los $500,000
    $inversion_propietario = $monto_total * 0.55;
    $prestamo_banco = $monto_total * 0.30;
    $credito_fabricante = $monto_total * 0.15; // El resto se paga con crédito al fabricante
    
    // Cálculo de intereses del crédito al fabricante
    $intereses_credito_fabricante = $credito_fabricante * 0.20;
} else {
    // Cálculo cuando el monto no excede los $500,000
    $inversion_propietario = $monto_total * 0.70;
    $credito_fabricante = $monto_total * 0.30;
    
    // Cálculo de intereses del crédito al fabricante
    $intereses_credito_fabricante = $credito_fabricante * 0.20;
}

// Mostrar los resultados en la consola
echo "Monto total de la compra: $" . $monto_total . "\n";
echo "Inversión del propietario: $" . $inversion_propietario . "\n";
echo "Préstamo del banco: $" . $prestamo_banco . "\n";
echo "Crédito al fabricante: $" . $credito_fabricante . "\n";
echo "Intereses sobre el crédito al fabricante: $" . $intereses_credito_fabricante . "\n";
echo "Total a pagar al fabricante (con intereses): $" . ($credito_fabricante + $intereses_credito_fabricante) . "\n";
?>
