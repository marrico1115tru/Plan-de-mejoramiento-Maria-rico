<?php
function tiene_anemia($edad, $sexo, $nivel_hemoglobina) {
    if ($edad <= 1/12) {
        $min = 13;
        $max = 26;
    } elseif ($edad > 1/12 and $edad <= 6/12) {
        $min = 10;
        $max = 18;
    } elseif ($edad > 6/12 and $edad <= 1) {
        $min = 11;
        $max = 15;
    } elseif ($edad > 1 and $edad <= 5) {
        $min = 11.5;
        $max = 15;
    } elseif ($edad > 5 and $edad <= 10) {
        $min = 12.6;
        $max = 15.5;
    } elseif ($edad > 10 and $edad <= 15) {
        $min = 13;
        $max = 15.5;
    } elseif ($sexo == "mujer" and $edad > 15) {
        $min = 12;
        $max = 16;
    } elseif ($sexo == "hombre" and $edad > 15) {
        $min = 14;
        $max = 18;
    } else {
        return "Datos no válidos.";
    }

    if ($nivel_hemoglobina < $min) {
        return "Positivo para anemia.";
    } else {
        return "Negativo para anemia.";
    }
}

?>