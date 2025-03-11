<?php
    $numeros = array(10, 20, 30, 40, 50, 60, 70, 80);


    $maior = $numeros[0];
    $menor = $numeros[0];

    for ($i = 1; $i < 8; $i++) {

    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }

    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
    }

    echo "O maior valor é: " . $maior . "<br>";
    echo "O menor valor é: " . $menor;
?>