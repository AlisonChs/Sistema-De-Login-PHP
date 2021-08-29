<?php

    // Verifica se o usuário é nulo

    if ($_POST['EmailDoUsuario'] == null ) {

        //Manda de volta para o formulário

        header("Location: bd_form_login.html");
    }

    else {

        // O usuário e senha digitados são colocados em suas respectivas variáveis

        $UsuarioDigitado = $_POST['EmailDoUsuario'];
        $SenhaDigitada = $_POST['SenhaDoUsuario'];

    }

    // Faz a conexão com o banco de dados

    require "bd_conectar.php";

    // Faz a consulta ao usuário digitado e retorna a consulta

    $strSQL = "SELECT EmailDoUsuario, SenhaDoUsuario FROM tbl_usuario WHERE EmailDoUsuario = '$UsuarioDigitado'";

    $consulta = mysqli_query($conexao, $strSQL);

    // Encerra a conexão

    require "bd_desconectar.php";

    // Loop pelo resultado da consulta
    // Cada resultado vai para um array (row) usando mysqli_fetch_array
    // O usuário e senha encontrados no BD são armazenados nas novas variáveis

    while ($linha = mysqli_fetch_array($consulta)) {
        $UsuarioBD = $linha['EmailDoUsuario'];
        $SenhaBD = $linha['SenhaDoUsuario'];
    }

    // Verifica o usuário e senha

    if ($UsuarioDigitado == $UsuarioBD && $SenhaBD == $SenhaDigitada) {
        
        // Se estiver correto a sessão fica YES

        session_start();

        $_SESSION['Login'] = "Sim";

        $msg_body = "<h1> Você está logado! </h1>";
        $msg_body = $msg_body . "<p><a href='bd_pagina_restrita.php'> Acesso á pagina restrita </a></p>";
    
    }

    else {

        // Se estiver correto a sessão fica NO

        session_start();

        $_SESSION['Login'] = "Nao";

        $msg_body = "<h1> Você não está logado! </h1>";
        $msg_body = $msg_body . "<h2><a href='bd_pagina_restrita.php'> Acesso á pagina restrita </a></h2>";
    
    }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets\css\main.css">
    </link>

    <script src="https://kit.fontawesome.com/7974d9d101.js" crossorigin="anonymous"></script>

    <title>Login | Sistema de login</title>

</head>

<body>

    <div id="container">
        <?php 
            echo $msg_body;
        ?>

        <a href="index.php"><button type="button" class="btn btn-secondary">Voltar ao início </button></a>
    </div>

</body>

</html>