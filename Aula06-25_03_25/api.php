<?php
    //cabeçalho
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    //conteudo
    $usuarios = [
        ["id" => 1, "nome" => "Raphael Souza", "email" => "rapha@email.com"],
        ["id" => 2, "nome" => "Caio Cordeiro", "email" => "caio@email.com"]
    ];

    // echo "Método da requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            // echo "Aqui são ações do método GET";
            //converte p/ json e retorna
            echo json_encode($usuarios);
            break;        
        case 'POST':
            //echo "Aqui são ações do método POST";
            $dados = json_decode(file_get_contents('php://input'), true);

            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //adiciona o novo usuario ao arrya existente
            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuário inserido com sucesso!!');
            print_r($usuarios);
            
            break;        
        default:
            echo "Método não encontrado";
            break;        
    }
    
?>