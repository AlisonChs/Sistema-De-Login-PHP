<?php // Início do PHP

        //  Conexão com o banco de dados
        require "bd_conectar.php";

        // Recupera os dados dos campos
        $nome = $_POST['NomeDoUsuario'];
        $sobrenome = $_POST['SobrenomeDoUsuario'];
        $celular = $_POST['CelularDoUsuario'];
        $nascimento = $_POST['NascimentoDoUsuario'];
        $email = $_POST['EmailDoUsuario'];
        $senha = $_POST['SenhaDoUsuario'];

        // Insere os dados no banco

        $sql = mysqli_query($conexao, "INSERT INTO tbl_usuario VALUES ('', '".$nome."',
            '".$sobrenome."', '".$celular."', '".$nascimento."', '".$email."', '".$senha."')");

        if ($sql) {
            $msg = "<h1>Você foi cadastrado com sucesso!</h1> <hr />";
        }

        else {
            $msg = "<h1>Houve um erro!</h1> <h2>Veja o último usuário cadastrado com sucesso.</h2> <hr />";
        }

    ?>

<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Alison Christian, Gabriel Ferreira" />
    <meta name="keywords" content="system login with php" />
    <meta name="description" content="Sistema de login com PHP" />

    <link rel="stylesheet" type="text/css" href="assets\css\main.css">
    </link>

    <script src="https://kit.fontawesome.com/7974d9d101.js" crossorigin="anonymous"></script>

    <title>Inserir dados | Sistema de login</title>

</head>

<body>

    <div id="container">

        <?php
            echo '<div>' . $msg . '</div>';

            // Seleciona todos os usuários
            $sql = mysqli_query($conexao, "SELECT * FROM tbl_usuario ORDER BY id DESC limit 1");

            // Exibe as informações de cada usuário 
            while ($usuario = mysqli_fetch_object($sql)) {

                // Exibimos as informações
                echo "<b class='dark'> Nome: </b>" . $usuario->NomeDoUsuario . "<br /> <br />";
                echo "<b class='dark'> Sobrenome: </b>" . $usuario->SobrenomeDoUsuario . "<br /> <br />";
                echo "<b class='dark'> Celular: </b>" . $usuario->CelularDoUsuario . "<br /> <br />";
                echo "<b class='dark'> Nascimento: </b>" . $usuario->NascimentoDoUsuario . "<br /> <br />";
                echo "<b class='dark'> Email: </b>" . $usuario->EmailDoUsuario . "<br /> <br />";
            }

            // Desconect do banco de dados
            require "bd_desconectar.php";

        ?>

        <a href="index.php"><button type="button" style="margin-top:2rem;" class="btn btn-secondary">Voltar ao início
            </button></a>


    </div>

</body>

</html>