<?php
    session_start();

    if(isset($_POST['user']) && isset($_POST['password'])) {
        $usuario = $_POST['user'];
        $senha = $_POST['password'];

        $usuarioCorreto = 'luiz.armendro';
        $senhaCorreta = '@2024';

        if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;

            $_SESSION['logado'] = true;
            header("location: Admin.php");
        } else {
            $_SESSION['msg'] = 'Usuário ou senha inválidos!';
            header("location: Index.php");
        }
    }
?>