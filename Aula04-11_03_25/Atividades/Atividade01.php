<?php
    $pessoa = array(
        "nome" => "Murilo",
        "idade" => 17,
        "cidade" => "Ribeirão Pires"
    );

    $pessoa["profissao"] = "Estudante";

    $amigos = array("Luana", "Lucas", "Rapha");

    $dados = array_merge($pessoa, array("amigos" => $amigos));

    print_r($dados);
?>