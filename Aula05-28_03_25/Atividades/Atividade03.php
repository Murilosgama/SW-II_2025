<?php

$novoProduto = ["nome" => "Produto D", "preco" => 25.99, "quantidade" => 4];

$produtos[] = $novoProduto;
$jsonProdutos = json_encode($produtos, JSON_PRETTY_PRINT);

file_put_contents("produtos.json", $jsonProdutos);

echo "Novo produto adicionado com sucesso!<br>";

?>