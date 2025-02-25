<?php

    function teste($x){
        foreach ($x as $nome){
            echo "$nome <br>";
        }
    }

    $vetor = ['Alberto','Rodolfo','Carlos','José'];

    teste($vetor);

?>