<?php
    $alunosNotas = array(
        "Murilo" => 9.0,
        "Lucas" => 9.0,
        "Rapha" => 9.5,
        "Luana" => 2.5,
        "Paulo" => 10.0
    );

    $somaNotas = 0;
    $alunoMelhorNota = "";

    //foreach ($alunosNotas as $nome => $nota) {
    //    if ($nota > $melhorNota) {
    //        $somaNotas += $nota;
    //    }
    //}
    foreach ($alunosNotas as $nome => $nota) {
        if ($nota > $melhorNota) {
            $melhorNota = $nota;
            $alunoMelhorNota = $nome;
        }
    }

    $quantidadeAlunos = count($alunosNotas);
    //$media = $somaNotas / $quantidadeAlunos;

    //echo "A média das notas de todos os alunos é: " . $media . "<br>";
    echo "O aluno com a melhor nota é: Nome-> " . $alunoMelhorNota . " / Nota-> " . $melhorNota;
?>