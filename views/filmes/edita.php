<?php

    require_once("../../config/conn.php");

    session_start();
        
    // verificando sessão para exibir apenas aos usuarios logados
    if(!isset($_SESSION["logado"])){
        header("Location: ../default/index.php");
    }

    // seleciona o ator
    if (isset($_GET) && $_GET && $_GET["id"]) {
      $query = $pdo->prepare('SELECT * FROM filmes WHERE id = :id'); 
      
      $query->execute([
          ":id" => $_GET["id"]
      ]);
      
      $filme = $query->fetch(PDO::FETCH_ASSOC);
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../../inc/head.php"); ?>
</head>
<body>
    <header class="container-fluid">
        <?php require_once("../../inc/navbar.php"); ?>
    </header>

    <main class="container pt-5 pb-5">
        <h1>Alteração do Cadastro de Filmes</h1>
        <div class="col-lg-6">
          <form id="formulario" action="../../utils/filmes/editar.php" method="POST">
              <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
              <div class="form-group">
                  <label for="exampleInputTitulo">Titulo</label>
                  <input type="text" name="titulo" class="form-control" id="exampleInputTitulo" value="<?= $filme["titulo"] ?>">
              </div>    
              <div class="form-group">
                  <label for="exampleInputSinopse">Sinopse</label>
                  <input type="text" name="sinopse" class="form-control" id="exampleInputSinopse" value="<?= $filme["sinopse"] ?>">
              </div>
              <button id="salvar" type="submit" class="btn btn-primary">Enviar</button>
              <div id="mensagem"></div>
          </form>
        </div>
    </main>

    <footer class="container-fluid">
        <?php require_once("../../inc/footer.php"); ?>
    </footer>

    <?php require_once("../../inc/scripts.php"); ?>
    <script type="text/javascript" src="../../ajax/ajax-validator-create.js"></script>
</body>
</html>