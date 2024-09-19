<?php

    session_start(); //recupera a sessão antes de destruí-la
    session_destroy(); //destrói a sessão 
    //session_unset(); limpa a variavel
    header('location: Index.php'); //redireciona para o login

?>