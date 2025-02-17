<?php
    if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
        $nota1 = floatval($_GET['nota1']);
        $nota2 = floatval($_GET['nota2']);
        $nota3 = floatval($_GET['nota3']);
        
        $media = ($nota1 + $nota2 + $nota3) / 3;
        
        echo "A sua média é: " . number_format($media, 2);
    } else {
        echo "Por favor, forneça três notas na URL, por exemplo: calculamedia.php?nota1=7&nota2=8.5&nota3=6";
    }
?>