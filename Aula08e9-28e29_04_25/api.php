<?php
    header("Content-Type: application/json"); //define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = 'usuarios.json';

    // Verifica se o arquivo existe, se NÃO, ele cria um array vazio
    if(!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    //LÊ O ARQUIVO JSON
    $usuarios = json_decode(file_get_contents($arquivo), true);

    switch ($metodo) {
        case 'GET':
            // Verifica se tem um parâmetro "id" na URL
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $usuario_encontrado = null;

                //Procura através do ID
                foreach ($usuarios as $usuario) {
                    if($usuario['id'] == $id){
                        $usuario_encontrado = $usuario;
                        break;
                    }
                }

                if ($usuario_encontrado) {
                    echo json_encode($usuario_encontrado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                }
                else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
                }
            }
            else{
                echo json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            break;

        case 'POST':
            $dados = json_decode(file_get_contents('php://input'), true);

            if (!isset($dados["nome"]) || !isset($dados["email"])) {
                http_response_code(400);
                echo json_encode(["erro" => "Nome e email são obrigatórios!!"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            //Gera um ID único
            $novo_id = 1;

            if (!empty($usuarios)) {
                $ids = array_column($usuarios, 'id');
                $novo_id = max($ids) + 1;
            }

            $novoUsuario = [
                "id" => $novo_id,
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //Adiciona o novo USUÁRIO ao array existente
            $usuarios[] = $novoUsuario;

            file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            //Retorna a mensagem de confirmação :)
            echo json_encode([
                "mensagem" => "Usuário inserido com sucesso",
                "usuario" => $novoUsuario
            ], JSON_UNESCAPED_UNICODE);
            break;

        case 'PUT':
            // Verifica se tem um parâmetro "id" na URL
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $dados = json_decode(file_get_contents('php://input'), true);
                $indice_usuario = -1;

                // Encontra o índice do usuário a ser atualizado
                foreach ($usuarios as $key => $usuario) {
                    if ($usuario['id'] == $id) {
                        $indice_usuario = $key;
                        break;
                    }
                }

                if ($indice_usuario !== -1) {
                    // Atualiza os dados do usuário se eles existirem no payload
                    if (isset($dados["nome"])) {
                        $usuarios[$indice_usuario]["nome"] = $dados["nome"];
                    }
                    if (isset($dados["email"])) {
                        $usuarios[$indice_usuario]["email"] = $dados["email"];
                    }

                    // Salva as alterações no arquivo
                    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

                    // Retorna a mensagem de confirmação
                    echo json_encode([
                        "mensagem" => "Usuário atualizado com sucesso",
                        "usuario" => $usuarios[$indice_usuario]
                    ], JSON_UNESCAPED_UNICODE);
                } else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Usuário não encontrado para atualização"], JSON_UNESCAPED_UNICODE);
                }
            } else {
                http_response_code(400);
                echo json_encode(["erro" => "ID do usuário não fornecido para atualização"], JSON_UNESCAPED_UNICODE);
            }
            break;

        case 'DELETE':
            // Verifica se tem um parâmetro "id" na URL
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $indice_usuario = -1;

                // Encontra o índice do usuário a ser deletado
                foreach ($usuarios as $key => $usuario) {
                    if ($usuario['id'] == $id) {
                        $indice_usuario = $key;
                        break;
                    }
                }

                if ($indice_usuario !== -1) {
                    // Remove o usuário do array
                    unset($usuarios[$indice_usuario]);

                    // Reindexa o array para evitar buracos
                    $usuarios = array_values($usuarios);

                    // Salva as alterações no arquivo
                    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

                    // Retorna a mensagem de confirmação
                    echo json_encode(["mensagem" => "Usuário deletado com sucesso"], JSON_UNESCAPED_UNICODE);
                } else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Usuário não encontrado para exclusão"], JSON_UNESCAPED_UNICODE);
                }
            } else {
                http_response_code(400);
                echo json_encode(["erro" => "ID do usuário não fornecido para exclusão"], JSON_UNESCAPED_UNICODE);
            }
            break;

        default:
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
            break;
    }
?>