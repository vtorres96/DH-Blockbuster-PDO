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
        <h1>Cadastro de Usuários</h1>
        <div class="col-lg-6">
            <form id="formulario" action="../../utils/usuarios/salvar.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Entre com seu nome">
                </div>    
                <div class="form-group">
                    <label for="exampleInputEmail">E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Entre com seu e-mail">
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
        <?php require_once("../../inc/footer.php"); ?>
    </footer>

    <?php require_once("../../inc/scripts.php"); ?>
    <script type="text/javascript" src="../../ajax/ajax-validator-create.js"></script>
</body>
</html>