<?php
$nomes = ['Maria','José','Carlos','Miranda','Raphael','Ruan','Cleiton'];

$qtde = count($nomes);
echo "Elementos: $qtde <br><br>";

for ($i = 0; $i < $qtde; $i++) {
    echo $nomes[$i] . " -- $i" . "<br>";
}
?>