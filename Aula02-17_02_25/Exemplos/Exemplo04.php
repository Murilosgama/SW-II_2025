<?php
$contador = 0;
echo "<br> While: <br>";
while ($contador < 5) {
    echo "Número: $contador <br>";
    $contador++;
}

echo "<br> For: <br>";
for ($i = 0; $i <5; $i++) {
    echo "Número: $i <br>";
}

echo "<br> Foreach: <br>";
$nomes = ["Ana <br>", "Bruno <br>", "Carlos <br>"];
    foreach ($nomes as $nome) {
        echo "Nome: $nome";
    }

    echo "<br>";
    echo "Sobrenome: ";
    $sobrenome = ['Rodrigues','Santos','Amaral'];
        echo $sobrenome[1];
?>