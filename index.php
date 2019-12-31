<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("inc/head.php"); ?>
</head>
<body>
    <header class="container-fluid">
        <?php require_once("inc/navbar.php"); ?>
    </header>

    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/banner-guerracivil.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner-marvel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner-heroes.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="filmes" class="container pt-5 pb-3">
        <h1>Filmes</h1>
        <p>Verifique abaixo alguns de nossos filmes mais recentes</p>
        <div class="card-deck">
            <div class="card">
                <img src="assets/img/banner-guerracivil.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="assets/img/banner-guerracivil.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="assets/img/banner-guerracivil.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </section>

    <section id="localizacao" class="container pb-5">
        <div class="mt-5" id="localizacao">
        <h1>Localização</h1>
        <p>Verifique a localização da nossa biblioteca</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.983057080286!2d-46.64885008593059!3d-23.569051984679056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59be874e1f11%3A0x3b0b41a1b5ea3fd!2sBiblioteca!5e0!3m2!1spt-BR!2sbr!4v1565381574508!5m2!1spt-BR!2sbr" width="100%" height="450px" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <footer class="container-fluid mt-2">
        <?php require_once("inc/footer.php"); ?>
    </footer>

    <?php require_once("inc/scripts.php"); ?>
</body>
</html>