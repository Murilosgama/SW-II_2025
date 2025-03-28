<?php

// Arquivo usuarios.json
$json_usuarios = '[
    {"id": 1, "nome": "João Silva", "email": "joao.silva@email.com"},
    {"id": 2, "nome": "Maria Oliveira", "email": "maria.oliveira@email.com"},
    {"id": 3, "nome": "Pedro Santos", "email": "pedro.santos@email.com"}
]';

file_put_contents('usuarios.json', $json_usuarios);

$json_lido = file_get_contents('usuarios.json');
$usuarios = json_decode($json_lido, true);

foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario['nome'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br><br>";
}

?>