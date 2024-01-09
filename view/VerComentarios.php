<?php
    require "../processamento/funcoesBD.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/VerComentarios.css">
    <link rel="stylesheet" href="../css/header-principal.css">
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
                <li><a href="../view/VerComentarios.php">Ver comentários</a></li>
            </ul>
        </div>
    </header>

    <div class="nome-tela">
        <h3>COMENTARIOS</h3>
    </div>

    <section class="conteudo-visualizar">
        <?php
            $listaComentarios = ExibirComentario();
            while($comentario = mysqli_fetch_assoc($listaComentarios)){
                echo"<section class=\"conteudo-bloco\">";
                echo "<p>" . $comentario["idcomentario"] . " - " . "</p" ;
                echo "<p>" . $comentario["corpo_comentario"] . "</p>";
                echo "</section>";
            }
            ?>
    </section>
</body>
</html>