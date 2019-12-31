<?php
    require_once("../../config/conn.php");

    session_start();
        
    // verificando sessão para exibir apenas aos usuarios logados
    if(!isset($_SESSION["logado"])){
        header("Location: ../default/index.php");
    }

    // Excluindo ator
    if (isset($_GET) && $_GET && $_GET["id"]) {
      $query = $pdo->prepare('DELETE FROM atores WHERE id = :id');
      
      $query->execute([
        ":id" => $_GET["id"]
      ]);
    }

    // listando atores
    $sql = "SELECT * FROM atores";
    $query = $pdo->prepare($sql);
    $query->execute();

    $atores = $query->fetchAll(PDO::FETCH_ASSOC);
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
    
    <section id="atores" class="container pb-5">
        <?php if(!$atores): ?>
            <div class="mt-5">
                <h1>Atores</h1>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p>No momento não existem atores cadastrados na plataforma, adicione uma novo ator.</p>
                    <a href="cadastro-ator.php">
                        <button class="btn btn-primary">Novo Ator</button>
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="mt-5">
                <h1>Atores</h1>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p>Verifique abaixo os atores cadastrados em nossa plataforma</p>
                    <a href="./cadastro.php">
                        <button class="btn btn-primary">Novo Ator</button>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>                                            
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th colspan="2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($atores as $ator): ?>
                            <tr>
                                <td><?= $ator['nome'] ?></td>
                                <td><?= $ator['sobrenome'] ?></td>
                                <td>
                                    <a href="./edita.php?id=<?= $ator["id"] ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal<?= $ator["id"] ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal<?= $ator["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Deseja realmente excluir ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Ator: <?= $ator["nome"] ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <a href="index.php?id=<?= $ator["id"] ?>">
                                                        <button type="button" class="btn btn-danger">Excluir</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>			
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <footer class="container-fluid mt-2">
        <?php require_once("../../inc/footer.php"); ?>
    </footer>

    <?php require_once("../../inc/scripts.php"); ?>
</body>
</html>