<?php

function es_primo($numero) {
    
    if ($numero < 2) {
        return false;
    }
    
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}


$numeros_primos = array();


for ($i = 1; $i <= 100; $i++) {
    if (es_primo($i)) {
        $numeros_primos[] = $i;
    }
}


echo "Números primos entre 1 y 100:\n";
foreach ($numeros_primos as $primo) {
    echo $primo . "\n";
}
?>