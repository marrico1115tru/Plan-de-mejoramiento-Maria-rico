<?php
function leerDatos($mensaje) {
    echo $mensaje;
    return readline();
}

$saldoCapital = leerDatos("Ingrese el saldo actual del capital: ");


$montoEquipoComputo = 5000;
$montoMobiliario = 2000;
$montoNuevoSaldoPositivo = 20000;
$montoNuevoSaldoNegativo = 10000; 


$prestamoBancario = 0;
$presupuestoRestante = 0;
$presupuestoInsumos = 0;
$presupuestoIncentivos = 0;


if ($saldoCapital < 0) {
    
    $prestamoBancario = $montoNuevoSaldoNegativo - $saldoCapital;
} elseif ($saldoCapital <= $montoNuevoSaldoPositivo) {
    
    $prestamoBancario = $montoNuevoSaldoPositivo - $saldoCapital;
}


$saldoConPrestamo = $saldoCapital + $prestamoBancario;


if ($prestamoBancario > 0) {
    $presupuestoRestante = $saldoConPrestamo - $montoEquipoComputo - $montoMobiliario;
    $presupuestoInsumos = $presupuestoRestante / 2;
    $presupuestoIncentivos = $presupuestoRestante / 2;
} else {

    $presupuestoRestante = $saldoCapital - $montoEquipoComputo - $montoMobiliario;
    if ($presupuestoRestante >= 0) {
        $presupuestoInsumos = $presupuestoRestante / 2;
        $presupuestoIncentivos = $presupuestoRestante / 2;
    } else {
        
        $presupuestoInsumos = 0;
        $presupuestoIncentivos = 0;
    }
}

// imprimir resultados
echo "Saldo actual del capital: $" . $saldoCapital . "\n";
echo "Monto del préstamo bancario solicitado: $" . $prestamoBancario . "\n";
echo "Presupuesto para equipo de cómputo: $" . $montoEquipoComputo . "\n";
echo "Presupuesto para mobiliario: $" . $montoMobiliario . "\n";
echo "Presupuesto restante: $" . $presupuestoRestante . "\n";
echo "Monto destinado para la compra de insumos: $" . $presupuestoInsumos . "\n";
echo "Monto destinado para incentivos al personal: $" . $presupuestoIncentivos . "\n";

?>
