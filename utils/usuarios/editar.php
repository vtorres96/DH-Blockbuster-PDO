<?php

  // incluir o arquivo de conexão com banco de dados
  require_once("../../config/conn.php");

  // incluir o arquivo que retorna a mensagem no front-end sem refresh
  require_once("../return-message.php");

  $id = $_REQUEST["id"];
  $nome = $_REQUEST["nome"];
  $email = $_REQUEST["email"];
  $senha = $_REQUEST["senha"];

  $sql = "UPDATE usuarios set nome = :nome, email = :email, senha = :senha WHERE id = :id";

  $query = $pdo->prepare($sql);

  $alterou = $query->execute([
    ":id" => $id,
    ":nome" => $nome,
    ":email" => $email,
    ":senha" => $senha    
  ]); 

  if(isset($alterou) && $alterou == true){
    echo retornaMensagem("Ator atualizado com sucesso. Atualize a página", true);
  } else {
      echo retornaMensagem("Falha ao processar requisição");
  }
  
?>