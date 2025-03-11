<?php
    $numeros = array(10, 20, 30, 40, 50, 60, 70, 80);


    $maiorN = $numeros[0];
    $menorN = $numeros[0];

    for ($i = 1; $i < 8; $i++) {
    if ($numeros[$i] > $maiorN) {
        $maiorN = $numeros[$i];
    }
    if ($numeros[$i] < $menorN) {
        $menorN = $numeros[$i];
    }
    }

    echo "O maior valor é: " . $maiorN . "<br>";
    echo "O menor valor é: " . $menorN;
?>