<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header-principal.css">
    <link rel="stylesheet" href="../css/trabalhe-conosco.css">
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

    <section class="container-cadastro">
        <section class="caixa-cadastro">
            <section class="conteudo-formulario">
                <h3>Trabalhe conosco</h3>
                <form id="form-log" method="POST" action="../processamento/processamento.php">
                    <input id="input-log" type="text" placeholder="Nome" name="inputNomeLog">
                    <input id="input-log" type="text" placeholder="Sobrenome" name="inputSobrenomeLog">
                    <input id="input-log" type="text" placeholder="CPF" name="inputCPFLog">
                    <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                    <label id="label-curriculo">Breve curriculo:</label>
                    <textarea name="breve-curriculo" id="curriculo-log"></textarea>
                    <input id="botao-log" type="submit" value="Enviar" name= "submit-trabalhe-conosco" >
                </form>
            </section>
        </section>
    </section>
</body>
</html>