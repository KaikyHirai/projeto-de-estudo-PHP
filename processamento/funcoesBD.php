<?php
function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "","trabalhonoticia");
    return($conexao);
}

function inserirEditor($cpf, $nome, $sobrenome, $email, $senha){
    $conexao = conectarBD();
    $inserir_editor = "INSERT INTO editor (PK_cpf, nome, sobrenome, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$email', '$senha')";

    mysqli_query($conexao, $inserir_editor);
}

function inserirNoticia($titulo, $corpo_noticia, $blob){
    $conexao = conectarBD();

    $inserir_noticia = "INSERT INTO noticia (titulo, corpo_noticia, imagem_noticia) VALUES ('$titulo', '$corpo_noticia', '$blob')";
    
    mysqli_query($conexao, $inserir_noticia);
}

function inserirComentario($comentario){
    $conexao = conectarBD();
    $inserir_comentario = "INSERT INTO comentario(corpo_comentario) VALUES ('$comentario')";

    mysqli_query($conexao, $inserir_comentario);
}

function inserirTrabalho($cpf_trabalho, $nome_trabalho, $sobrenome_trabalho, $email_trabalho, $breve_curriculo){
    $conexao = conectarBD();
    $inserir_trabalho = "INSERT INTO trabalhe_conosco(cpf_trabalho, nome_trabalho, sobrenome_trabalho, email_trabalho, breve_curriculo) VALUES ('$cpf_trabalho', '$nome_trabalho', '$sobrenome_trabalho', '$email_trabalho', '$breve_curriculo')";

    mysqli_query($conexao, $inserir_trabalho);
}



// CONSULTADO TODAS AS NOTICIAS
function gerenciarNoticias(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM noticia";
    $listaNoticias = mysqli_query($conexao, $consulta);
    return $listaNoticias;
}

//Exibir cadastro EDITORES
function ExibirEditores(){
    
    $conexao = conectarBD();
    $exibeEditores = "SELECT * FROM editor";
    $listaEditor = mysqli_query($conexao, $exibeEditores);
    return $listaEditor;
}

function ExibirNoticia(){
    $conexao = conectarBD();
    $exibeNoticia = "SELECT * FROM noticia";
    $listaNoticias = mysqli_query($conexao, $exibeNoticia);
    return $listaNoticias;
}



// //Exibir COMENTARIO
function ExibirComentario(){
    $conexao = conectarBD();
    $listaComentarios = "SELECT * FROM comentario";
    $listaComentarios = mysqli_query($conexao, $listaComentarios);
    return $listaComentarios;
    
}

function EscolhaNoticia(){
    $conexao = conectarBD();
    $noticia_cadastradas = "SELECT idnoticia, nome FROM noticia";
    $noticia_cadastradas = mysqli_query($conexao, $noticia_cadastradas);
    return $noticia_cadastradas;
}

// LIBERAR LOGIN
function liberarLogin($email, $senha){
    $conexao = conectarBD();

    $query = "SELECT * FROM editor WHERE email = '$email' AND senha = '$senha'";
    $executar = mysqli_query($conexao, $query);
    $return = mysqli_fetch_assoc($executar);

    if (!empty($return['email']) && !empty($return['senha'])) {
        header("location: ../view/VerNoticia.php");
    }
    else{
        echo "Usuário e senha não encontrados";
        header("location: ../view/login.php");
    }
}

?>