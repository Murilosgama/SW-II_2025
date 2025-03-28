<?php

$nomeProdutoRemover = "Produto B";
$produtos = array_filter($produtos, function ($produto) use ($nomeProdutoRemover) {
    return $produto["nome"] !== $nomeProdutoRemover;
});

$jsonProdutos = json_encode(array_values($produtos), JSON_PRETTY_PRINT);

file_put_contents("produtos.json", $jsonProdutos);

echo "Produto removido com sucesso!<br>";
?>