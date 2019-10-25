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
        <?php 
            session_start();
            $nome = $_SESSION["nome"];
        ?>
        <h1>Olá <?= $nome ?></h1>
    </main>

    <footer class="container-fluid">
        <?php require_once("includes/footer.php"); ?>
    </footer>

    <?php require_once("includes/scripts.php"); ?>
</body>
</html>