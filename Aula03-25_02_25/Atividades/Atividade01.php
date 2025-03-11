<?php
    // 1. Função que exibe uma mensagem de boas-vindas
function boasVindas($nome) {
    echo "Olá, " . $nome . "! Seja bem-vindo(a)!<br>";
}

// 2. Função que retorna a diferença entre dois números
function calcularDiferenca($num1, $num2) {
    return $num1 - $num2;
}

// 3. Função que informa se um número é par ou ímpar
function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        echo $numero . " é par.<br>";
    } else {
        echo $numero . " é ímpar.<br>";
    }
}

// 4. Função que retorna a tabuada de um número
function gerarTabuada($numero) {
    echo "Tabuada do " . $numero . ":<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

// 5. Função que retorna a soma dos elementos de um array
function somarArray($array) {
    $soma = 0;
    foreach ($array as $numero) {
        $soma += $numero;
    }
    return $soma;
}

// 6. Função que gera e retorna um array com 10 números aleatórios
function gerarArrayAleatorio() {
    $arrayAleatorio = array();
    for ($i = 0; $i < 10; $i++) {
        $arrayAleatorio[] = rand(1, 100); // Números aleatórios entre 1 e 100
    }
    return $arrayAleatorio;
}

// 7. Função que recebe um número e retorna seu fatorial
function calcularFatorial($numero) {
    if ($numero == 0) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

// 9. Função que recebe um número e retorna seu fatorial
$diferenca = calcularDiferenca(10, 5);
echo "A diferença é: " . $diferenca . "<br>";

verificarParImpar(7);

gerarTabuada(3);

$numeros = array(1, 2, 3, 4, 5);
$somaArray = somarArray($numeros);
echo "A soma dos elementos do array é: " . $somaArray . "<br>";

$arrayAleatorio = gerarArrayAleatorio();
echo "Array aleatório: " . implode(", ", $arrayAleatorio) . "<br>";

$fatorial = calcularFatorial(5);
echo "O fatorial de 5 é: " . $fatorial . "<br>";
?>