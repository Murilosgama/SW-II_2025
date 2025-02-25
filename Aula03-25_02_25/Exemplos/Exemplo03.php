<?php
    //FUNÇÃO SEM PARAMETRO MAS COM RETORNO

    function bom_dia(){
        $a = "Murilo";
        return $a;
    }

    $frase = "Tenha um bom dia ";
    $frase .= bom_dia();
    $frase .= ".";

    echo $frase;
?>