<?php
$PI = 3.1416;

echo "Introduce el radio de la esfera: ";

$radio = fgets(STDIN);


$radio = (float)$radio;


$perimetro = 2 * $PI * $radio;


$area = $PI * $radio * $radio;


$volumen = (4 / 3) * $PI * $radio * $radio * $radio;


echo "Perímetro de la circunferencia: " . round($perimetro, 2) . "\n";
echo "Área del círculo: " . round($area, 2) . "\n";
echo "Volumen de la esfera: " . round($volumen, 2) . "\n";
?>
