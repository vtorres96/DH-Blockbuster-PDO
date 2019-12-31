<?php
  if(!isset($_SESSION)) { 
      session_start(); 
  } 
  if($_SESSION){
    $logado = $_SESSION["logado"];
    $nome = $_SESSION["nome"];
    
    if($logado){
      $active = "admin";
    }
  } else { 
    $active = "comum";
  }
?>

<?php if($active == "comum"): ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mr-auto" href="index.php">Blockbuster</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">    
          <a class="nav-item nav-link text-white" href="../default/index.php">Home</a>
          <a class="nav-item nav-link text-white" href="../default/index.php#lancamentos">Lançamentos</a>
          <a class="nav-item nav-link text-white" href="../default/index.php#localizacao">Localização</a>
          <a class="nav-item nav-link text-white" href="../usuarios/cadastro.php">Cadastre-se</a>
          <a class="nav-item nav-link text-white" href="../auth/login.php">Login</a>
      </div>
    </div>
  </nav>
<?php elseif($active == "admin"): ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mr-auto" href="index.php">Blockbuster</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">    
          <a class="nav-item nav-link text-white" href="../default/index.php">Home</a>
          <a class="nav-item nav-link text-white" href="../atores/index.php">Atores</a>
          <a class="nav-item nav-link text-white" href="../filmes/index.php">Filmes</a>
          <a class="nav-item nav-link text-white" href="#">Olá, <?= $nome ?></a>
          <a class="nav-item nav-link text-white" href="../../utils/auth/logout.php">Sair</a>
      </div>
    </div>
  </nav>
<?php endif; ?>