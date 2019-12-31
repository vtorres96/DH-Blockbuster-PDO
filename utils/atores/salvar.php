<?php

    // incluir o arquivo de conexão com banco de dados
    require_once("../../config/conn.php");

    // incluir o arquivo que retorna a mensagem no front-end sem refresh
    require_once("../return-message.php");

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];

    if(!strlen($nome) || !strlen($sobrenome)){
        echo retornaMensagem("Todos os campos devem ser preenchidos");
        return;
    }

    $query = $pdo->prepare("INSERT INTO atores (nome, sobrenome) VALUES (:nome, :sobrenome)");

    $salvou = $query->execute([
        ":nome" => $nome, 
        ":sobrenome" => $sobrenome
    ]);
    
    if(isset($salvou) && $salvou == true){
        echo retornaMensagem("Ator cadastrado com sucesso", true);
    } else {
        echo retornaMensagem("Falha ao processar requisição");
    }

?>