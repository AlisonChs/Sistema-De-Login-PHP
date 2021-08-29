<?php

    // Inicia a sessão
    session_start();

    // Se o usuário não estiver logado, manda ele para a página de INÍCIO
    if ($_SESSION['Login'] != 'Sim') {
        header("Location: index.php");
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
    <title>Arquivo restrito | Sistema de login</title>
</head>

<body>
    <div id="container">
        <div>
            <h1>Você está em um arquivo restrito! </h1>
        </div>

        <div>
            <p> Permitido apenas para usuários autorizados. </p>
        </div>
        <div>
            <a href="bd_logoff.php"><button type="button" class="dark"> LOGOFF </button></a>
        </div>
    </div>
</body>

</html>