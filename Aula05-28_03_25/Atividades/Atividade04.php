<?php

$emailBuscado = "usuario@example.com";
$usuarioEncontrado = null;

foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $emailBuscado) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado) {
    echo "Usuário encontrado: Nome: " . $usuarioEncontrado["nome"] . " - Email: " . $usuarioEncontrado["email"] . "<br>";
} else {
    echo "Usuário não encontrado.<br>";
}

?>