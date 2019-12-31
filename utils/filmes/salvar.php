<?php

    // incluir o arquivo de conexão com banco de dados
    require_once("../../config/conn.php");

    // incluir o arquivo que retorna a mensagem no front-end sem refresh
    require_once("../return-message.php");

    $titulo = $_POST["titulo"];
    $sinopse = $_POST["sinopse"];

    if(!strlen($titulo) || !strlen($sinopse)){
        echo retornaMensagem("Todos os campos devem ser preenchidos");
        return;
    }

    $query = $pdo->prepare("INSERT INTO filmes (titulo, sinopse) VALUES (:titulo, :sinopse)");

    $salvou = $query->execute([
        ":titulo" => $titulo, 
        ":sinopse" => $sinopse
    ]);
    
    if(isset($salvou) && $salvou == true){
        echo retornaMensagem("Filme cadastrado com sucesso", true);
    } else {
        echo retornaMensagem("Falha ao processar requisição");
    }

?>