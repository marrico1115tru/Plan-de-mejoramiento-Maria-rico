<?php

function invertirCadena($cadena) {
    // Inicializamos una variable vacía para la cadena invertida
    $cadenaInvertida = "";

    // Determinamos la longitud de la cadena manualmente
    $longitud = 0;
    while (isset($cadena[$longitud])) {
        $longitud++;
    }
    
    // Iteramos desde el final de la cadena hasta el principio
    for ($i = $longitud - 1; $i >= 0; $i--) {
        // Concatenamos el carácter actual a la cadena invertida
        $cadenaInvertida .= $cadena[$i];
    }
    
    // Devolvemos la cadena invertida
    return $cadenaInvertida;
}

// Cadena de texto que queremos invertir
$texto = "Hola mundo";

// Llamamos a la función para invertir la cadena
$textoInvertido = invertirCadena($texto);

// Mostramos el resultado en la consola
echo $textoInvertido;
?>
