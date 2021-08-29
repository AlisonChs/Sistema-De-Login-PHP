<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Alison Christian" />
    <meta name="keywords" content="system login with php" />
    <meta name="description" content="Sistema de login com PHP" />

    <link rel="stylesheet" type="text/css" href="assets\css\main.css">
    </link>

    <script src="https://kit.fontawesome.com/7974d9d101.js" crossorigin="anonymous"></script>

    <title>Sistema de login</title>

</head>

<body>

    <div id="container">

        <?php // Início do PHP

            // Iniciando sessão
            session_start();

        ?>

        <div id="description">
            <h1>Olá! </h1>
            <hr />
            <h2> Este site tem como objetivo realizar um sistema de LOGIN utilizando do <a
                    href="https://www.php.net/docs.php" target="_blank">PHP</a> e <a href="https://dev.mysql.com/doc/"
                    target="_blank">MYSQL</a>, destinado a entrega de uma tarefa, a qual precisávamos repetir os passos
                da <a href="https://www.youtube.com/watch?v=YLpc47LpxuM" target="_blank">aula</a> do <a
                    href="https://www.youtube.com/user/mauriciotdasilva" target="_blank">professor MAU</a>. </h2>
        </div>

        <div>
            <div>
                <a href="bd_form_login.html"><button type="button" class="dark"> Realizar login </button></a>
                <a href="bd_form_cad_usuario.html"><button type="button" class="dark"> Realizar cadastro </button></a>
            </div>
        </div>

        <div>
            <a target="_blank" href="//github.com/alisonchs"><button type="button" class="btn btn-warning"><b>Ver
                        código-fonte completo
                        <hr style="background-color: black">
                        <p>
                        </p><i class="fab fa-github" style='font-size:25px'></i>
                    </b></button></a>
        </div>

    </div>

</body>

</html>