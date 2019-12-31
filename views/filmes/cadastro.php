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
        <h1>Cadastro de Filmes</h1>
        <div class="col-lg-6">
            <form id="formulario" action="../../utils/filmes/salvar.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputTitulo">Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="exampleInputTitulo" placeholder="Insira título do filme">
                </div>    
                <div class="form-group">
                    <label for="exampleInputSinopse">Sinopse</label>
                    <input type="text" name="sinopse" class="form-control" id="exampleInputSinopse" placeholder="Insira sinopse do filme">
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