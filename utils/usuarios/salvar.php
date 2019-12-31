<?php

    // incluir o arquivo de conexão com banco de dados
    require_once("../../config/conn.php");

    // incluir o arquivo que retorna a mensagem no front-end sem refresh
    require_once("../return-message.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(!strlen($nome) || !strlen($email) || !strlen($senha)){
        echo retornaMensagem("Todos os campos devem ser preenchidos");
        return;
    }

    $query = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");

    $salvou = $query->execute([
        ":nome" => $nome, 
        ":email" => $email,
        ":senha" => password_hash($senha, PASSWORD_DEFAULT)
    ]);
    
    if(isset($salvou) && $salvou == true){
        echo retornaMensagem("Usuário cadastrado com sucesso", true);
    } else {
        echo retornaMensagem("Falha ao processar requisição");
    }

?>