<?php
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $soma = 0;

    for ($i = 0; $i < 10; $i++) {
    $soma = $soma + $numeros[$i];
    }

    echo "A soma dos números de 1 a 10 é: " . $soma;
?>