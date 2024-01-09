<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header-principal.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>WOW News</title>

</head>

<body>

    <header>
        <div class="logo"> 
            <a href=""><img src="../img/logo.png" alt="logo"></a>
        </div>
        
        <div class="cabecalho">
            <ul>
                <li></li>
                <li><a href="../view/VerNoticia.php">Notícias</a></li>
                <li><a href="../view/trabalheConosco.php">Trabalhe conosco</a></li>
                <li><a href="../view/cadastro-noticia.php">Postar noticia</a></li>
                <li><a href="../view/VerEditores.php">Ver editores</a></li>
                <li><a href="../view/VerComentarios.php">Ver cometarios</a></li>
            </ul>
        </div>
    </header>

    <div class="p-4 p-md-5 mb-4 w-75 m-sm-auto rounded text-body-emphasis bg-body-secondary">
        <div class="px-0">
            <h1 class="display-4 fst-Didot" style="color: rgb(66, 66, 177);">Argentina vai parar de interagir com Brasil
                e China, diz cotada do ministério</h1>
            <p class="lead my-3">A principal candidata para assumir o ministério das Relações Exteriores da Argentina
                disse que o país não vai promover relações com o Brasil e com a China. A declaração de Diana Mondino foi
                dada em entrevista à agência de notícias russa RIA Novosti.</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continuar lendo ...</a></p>
        </div>
    </div>

    <!-- Carrosel -->

    <div id="carouselExampleCaptions" class="carousel slide w-50 mx-auto mt-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/img1-carrosel.jpg" class="d-block w-100 m-sm-auto" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Netanyahu considera que acordo sobre reféns é decisão correta</h5>
                    <p>O primeiro-ministro de Israel, Benjamin Netanyahu, declarou nesta terça-feira (21) diante dos membros de seu governo que aceitar um acordo para a libertação dos reféns sequestrados pelo Hamas no ataque de 7 de outubro é “uma decisão complicada, mas é uma decisão correta”.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/img2-carrosel.jpg" class="d-block w-100" alt="" style="width: 940px; height: 470px;">
    
    
                <div class="carousel-caption d-none d-md-block">
                    <h5>Senado aprova rito especial para votar PEC que limita poder do STF nesta 4ª (22)</h5>
                    <p>O Senado aprovou nesta terça-feira, 21, por 48 votos a 20, um rito especial para votar na quarta-feira, 22, a Proposta de Emenda à Constituição (PEC) que limita os poderes de ministros do Supremo Tribunal Federal (STF). O texto estabelece que os magistrados ficarão impedidos de suspender por meio de decisões individuais a vigência de leis ou atos dos presidentes da República, do Senado e da Câmara dos Deputados. A medida também vale para leis e atos administrativos analisados pelos tribunais estaduais.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/img3-carrosel.jpg" class="d-block w-100" alt=""  style="width: 940px; height: 470px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Inter Miami de Messi e Al-Nassr de Cristiano Ronaldo se enfrentarão em fevereiro</h5>
                    <p>O Inter Miami de Lionel Messi irá enfrentar o Al-Nassr de Cristiano Ronaldo em fevereiro, em Riad (Arábia Saudita), no que pode ser o último duelo entre as duas superestrelas do futebol mundial, informaram os organizadores do evento nesta terça-feira (21).</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Cards -->

    <div class="card-group w-75 mx-auto mt-5 column-gap-3">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Titulo da Noticia</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Titulo da Noticia</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Titulo da Noticia</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Titulo da Noticia</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>

    <hr>

    <div class="row w-75 mx-auto mt-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>