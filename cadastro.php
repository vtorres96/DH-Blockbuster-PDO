<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("includes/head.php"); ?>
</head>
<body>
    <header class="container-fluid">
        <?php require_once("includes/navbar.php"); ?>
    </header>

    <main class="container pt-5 pb-5">
        <h1>Cadastro de Usuários</h1>
        <div class="col-lg-6">
            <form id="formulario" action="utils/salvar-usuario.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputNome" aria-describedby="nome" placeholder="Entre com seu nome">
                </div>    
                <div class="form-group">
                    <label for="exampleInputEmail">E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entre com seu e-mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword" placeholder="Entre com sua senha">
                </div>
                <button id="salvar" type="submit" class="btn btn-primary">Enviar</button>
                <div id="mensagem"></div>
            </form>
        </div>
    </main>

    <footer class="container-fluid">
        <?php require_once("includes/footer.php"); ?>
    </footer>

    <?php require_once("includes/scripts.php"); ?>
    <script type="text/javascript" src="ajax/ajax-validator-create.js"></script>
</body>
</html>