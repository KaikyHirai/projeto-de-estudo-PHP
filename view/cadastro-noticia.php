

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header-principal.css">
    <link rel="stylesheet" href="../css/cadastro-noticia.css">
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

    <section class="container-noticia">
        <section class="caixa-cadastro">
            <section class="conteudo-noticia">
                <h1>Postagem de noticia</h1>
                <form enctype="multipart/form-data" id="form-log" action="../processamento/processamento.php" method="POST">
                    <input id="input-log" type="text" placeholder="Titulo" name="inputTituloLog">
                    <textarea id="conteudo-log" type="text" name="inputConteudoLog">Digite o conteúdo da notícia aqui.</textarea>
                    <label>Inserir imagens na noticia:</label>
                    <input id="img-log" type="file" name="inputImgLog" accept="image/jpeg, image/png">
                    <input id="botao-log" type="submit" value="Enviar" name="cadastrar-noticia">
                </form>
            </section>
        </section>
    </section>

</body>
</html>