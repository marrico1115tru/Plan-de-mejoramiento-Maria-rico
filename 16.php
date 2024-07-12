<?php
// Función para contar la frecuencia de palabras en una cadena de texto
function contarFrecuenciaPalabras($texto) {
    // Definir signos de puntuación y otros caracteres a eliminar
    $signosPuntuacion = array('.', ',', ';', ':', '!', '?', '-', '(', ')', '[', ']', '{', '}', '"', '\'');

    // Inicializar el array de recuento de palabras
    $recuento = array();

    // Variables para manejar el texto y las palabras
    $palabra = '';
    $enPalabra = false;

    // Recorrer cada carácter del texto
    for ($i = 0; isset($texto[$i]); $i++) {
        $caracter = $texto[$i];

        // Si el carácter es un signo de puntuación, se considera un delimitador de palabra
        if (in_array($caracter, $signosPuntuacion)) {
            if ($enPalabra) {
                // Se terminó una palabra
                $enPalabra = false;
                $palabra = strtolower($palabra);

                // Contar la palabra
                if (isset($recuento[$palabra])) {
                    $recuento[$palabra]++;
                } else {
                    $recuento[$palabra] = 1;
                }

                // Reiniciar la palabra
                $palabra = '';
            }
        } else {
            // Acumulando caracteres para formar una palabra
            $enPalabra = true;
            $palabra .= $caracter;
        }
    }

    // Asegurarse de contar la última palabra si no termina en signo de puntuación
    if ($enPalabra) {
        $palabra = strtolower($palabra);
        if (isset($recuento[$palabra])) {
            $recuento[$palabra]++;
        } else {
            $recuento[$palabra] = 1;
        }
    }

    return $recuento;
}

// Texto de ejemplo
$texto = "Hola, hola! ¿Cómo estás? Estoy bien, gracias. ¿Y tú?";

// Contar la frecuencia de las palabras
$recuento = contarFrecuenciaPalabras($texto);

// Mostrar el recuento en consola
foreach ($recuento as $palabra => $cantidad) {
    echo $palabra . ": " . $cantidad . "\n";
}
?>

