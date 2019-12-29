<?php

    // incluir o arquivo de conexão com banco de dados
    require_once("../../config/conn.php");

    // incluir o arquivo que retorna a mensagem no front-end sem refresh
    require_once("../return-message.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");

    $query->execute([
        ":email" => $email
    ]);

    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    
    if(!$usuario){
        echo retornaMensagem("Usuário não encontrado");
        return;
    }

    if(password_verify($senha, $usuario["senha"])){
        session_start();
        $_SESSION["logado"] = true;
        $_SESSION["nome"] = $usuario["nome"];
        echo retornaMensagem("Redirecionando...", true);
    } else {
        echo retornaMensagem("Usuário ou senha inválidos");
        return;
    }
    

?>