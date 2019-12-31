<?php

  // incluir o arquivo de conexão com banco de dados
  require_once("../../config/conn.php");

  // incluir o arquivo que retorna a mensagem no front-end sem refresh
  require_once("../return-message.php");

  $id = $_REQUEST["id"];
  $nome = $_REQUEST["nome"];
  $sobrenome = $_REQUEST["sobrenome"];

  $sql = "UPDATE atores set nome = :nome, sobrenome = :sobrenome WHERE id = :id";

  $query = $pdo->prepare($sql);

  $alterou = $query->execute([
    ":id" => $id,
    ":nome" => $nome,
    ":sobrenome" => $sobrenome
  ]); 

  if(isset($alterou) && $alterou == true){
    echo retornaMensagem("Ator atualizado com sucesso. Atualize a página", true);
  } else {
      echo retornaMensagem("Falha ao processar requisição");
  }
  
?>