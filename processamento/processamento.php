<?php

session_start();
require "funcoesBD.php";

//Cadastro de editor
if(isset($_POST['cadastrar']) && !empty($_POST['inputNomeLog']) && !empty($_POST['inputSobrenomeLog']) && 
   !empty($_POST['inputCPFLog']) && !empty($_POST['inputEmailLog']) &&
   !empty($_POST['inputSenhaLog'])){

   $nome = $_POST['inputNomeLog'];
   $sobrenome = $_POST['inputSobrenomeLog'];
   $cpf = $_POST['inputCPFLog'];
   $email = $_POST['inputEmailLog'];
   $senha = $_POST['inputSenhaLog'];

   inserirEditor($cpf, $nome, $sobrenome, $email, $senha);
   header('location: ../view/login.php');
   die();
   }



//Cadastro de noticia
if(isset($_POST['cadastrar-noticia']) && !empty($_POST['inputTituloLog']) && !empty($_POST['inputConteudoLog'])){
   
   $titulo = $_POST['inputTituloLog'];
   $corpo_noticia = $_POST['inputConteudoLog'];
   $imagem_noticia = $_FILES['inputImgLog'];
   $blob = addslashes(file_get_contents($imagem_noticia['tmp_name']));
   
   inserirNoticia($titulo, $corpo_noticia, $blob);

   header('location: ../view/VerNoticia.php');
   die();
}

//Cadastro de comentário
if(isset($_POST['cadastrar-comentario']) && !empty($_POST['comentario'])){
   $comentario = $_POST['comentario'];
   inserirComentario($comentario);

   header('location: ../view/VerComentarios.php');
   die();
}

// Cadastro Trabalhe conosco
if (isset($_POST['submit-trabalhe-conosco']) && !empty($_POST['inputNomeLog']) && !empty($_POST['inputSobrenomeLog']) && 
!empty($_POST['inputCPFLog']) && !empty($_POST['inputEmailLog']) && !empty($_POST['breve-curriculo'])) {
   $nome_trabalho = $_POST['inputNomeLog'];
   $sobrenome_trabalho = $_POST['inputSobrenomeLog'];
   $cpf_trabalho = $_POST['inputCPFLog'];
   $email_trabalho = $_POST['inputEmailLog'];
   $breve_curriculo = $_POST['breve-curriculo'];

   inserirTrabalho($nome_trabalho, $sobrenome_trabalho, $cpf_trabalho, $email_trabalho, $breve_curriculo);
   header('location: ../view/login.php');
   die();
}

//Login
if (isset($_POST['login']) && !empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog'])){
   $email = $_POST['inputEmailLog'];
   $senha= $_POST['inputSenhaLog'];

   liberarLogin($email, $senha);
}


?>