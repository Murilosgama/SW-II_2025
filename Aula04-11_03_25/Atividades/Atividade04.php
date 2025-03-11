<?php
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

    $pares = 0;
    $impares = 0;

    for ($i = 0; $i < 15; $i++) {
        if ($numeros[$i] % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "A quantidade de números pares é: " . $pares . "<br>";
    echo "A quantidade de números ímpares é: " . $impares;
?>