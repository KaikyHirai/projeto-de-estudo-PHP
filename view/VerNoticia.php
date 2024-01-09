<?php
require "../processamento/funcoesBD.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/VerNoticia.css">
    <link rel="stylesheet" href="../css/header-principal.css">
    <title>WOW news</title>
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


    <div class="nome-tela">
        <h3>NOTÍCIAS</h3>
    </div>

    <section class="conteudo-visualizar">
            <?php
              $listaNoticia = ExibirNoticia();
              while($noticias = mysqli_fetch_assoc($listaNoticia)){
                echo"<section class=\"conteudo-bloco\">";
                    echo"<div class=\"conteudo-bloco-titulo\">";
                        echo "<h3>" . $noticias["titulo"] . "</h3>";
                    echo "</div>";

                    echo "<hr>";

                    echo"<div class=\"conteudo-bloco-corpo\">";
                         echo "<p>" . $noticias["corpo_noticia"] . "</p>";
                            echo"<div class=\"conteudo-bloco-img\">";
                                echo '<img src="data:image/jpg;base64,'.base64_encode($noticias["imagem_noticia"]).'"/>';
                                echo "<div class=\"conteudo-bloco-comentar\">";
                                    echo "<a href=\"../view/cadastro-comentario.php\"><button>". "Comentar" . "</button></a>";
                                echo "</div>";
                            echo "</div>";
                    echo "</div>";

                    
                echo "</section>";
              }
            ?>
    </section>
</body>

</html>