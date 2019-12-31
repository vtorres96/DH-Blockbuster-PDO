<?php

  // incluir o arquivo de conexão com banco de dados
  require_once("../../config/conn.php");

  // incluir o arquivo que retorna a mensagem no front-end sem refresh
  require_once("../return-message.php");

  $id = $_REQUEST["id"];
  $titulo = $_REQUEST["titulo"];
  $sinopse = $_REQUEST["sinopse"];

  $sql = "UPDATE filmes set titulo = :titulo, sinopse = :sinopse WHERE id = :id";

  $query = $pdo->prepare($sql);

  $alterou = $query->execute([
    ":id" => $id,
    ":titulo" => $titulo,
    ":sinopse" => $sinopse
  ]); 

  if(isset($alterou) && $alterou == true){
    echo retornaMensagem("Filme atualizado com sucesso. Atualize a página", true);
  } else {
      echo retornaMensagem("Falha ao processar requisição");
  }
  
?>