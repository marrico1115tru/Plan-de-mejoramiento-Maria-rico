<?php
$numero1 = 0;
$numero2 = 1;

echo $numero1 . "\n"; 


for ($i = 1; $i < 50; $i++) {
    
    $siguienteNumero = $numero1 + $numero2;
    
    
    echo $siguienteNumero . "\n";
    
    
    $numero1 = $numero2;
    $numero2 = $siguienteNumero;
}
?>
