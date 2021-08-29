<?php

    // Iniciamos a sessão que foi aberta
    session_start();

    // Finalizamos a sessão
    session_destroy();

    // Limpamos as variáveis globais da sessão
    session_unset();

    // Direciona o usuário para a página de login
    header("Location: index.php");

?>