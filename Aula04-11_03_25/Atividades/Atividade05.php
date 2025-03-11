<?php
$alunosNotas = array(
    "Murilo" => 9.0,
    "Lucas" => 9.0,
    "Rapha" => 9.5,
    "Luana" => 2.5,
    "Paulo" => 10.0
);

$somaNotas = 0;

foreach ($alunosNotas as $nome => $nota) {
    $somaNotas += $nota;
}

$media = $somaNotas / $quantidadeAlunos;

echo "A média das notas de todos os alunos é: " . $media;

?>