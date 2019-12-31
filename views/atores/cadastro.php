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
        <h1>Cadastro de Atores</h1>
        <div class="col-lg-6">
            <form id="formulario" action="../../utils/atores/salvar.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Insira o nome do ator">
                </div>    
                <div class="form-group">
                    <label for="exampleInputSobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="exampleInputSobrenome" placeholder="Insira o sobrenome do ator">
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