<?php

$produtos = array(
    array('nome' => 'Camiseta', 'preco' => 29.99, 'quantidade' => 10),
    array('nome' => 'Calça Jeans', 'preco' => 89.90, 'quantidade' => 5),
    array('nome' => 'Tênis', 'preco' => 120.00, 'quantidade' => 3)
);

$json_produtos = json_encode($produtos);

$arquivo = 'produtos.json';
file_put_contents($arquivo, $json_produtos);

echo "Arquivo JSON '$arquivo' criado com sucesso!";

?>