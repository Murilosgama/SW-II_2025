<?php
    $notas = array (10, 9, 5, 6, 2, 4, 3, 1, 7, 8);

    sort($notas);

    echo "A menor nota é: " . $notas[0] . "<br>";
    echo "A maior nota é: " . $notas[count($notas) - 1];
?>