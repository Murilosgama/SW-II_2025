<?php
    //FUNÇÃO COM PARAMETRO E COM RETORNO

    function mensagem($x){
        $a = "Murilo " . $x;
        return $a;
    }

    $sobrenome = "Gama";

    $frase = "Tenha um bom dia ";
    $frase .= mensagem($sobrenome);
    $frase .= ".";

    echo $frase;
?>