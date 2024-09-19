<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="page">
        <form action="validarLogin.php" method="POST" class="formLogin">
            <h1>Olá usuário, faça seu login.</h1>
            <p>Digite os seus dados de acesso nos campos abaixo. Caso não possua, realize o seu cadastro.</p>
            <label for="user">Usuário</label>
            <input type="text" name="user" placeholder="Digite seu usuário" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha" />
            <a href="#">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>