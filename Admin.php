<?php
    session_start();

    if(isset($_SESSION['usuario'])) {
        $verUsuario = $_SESSION['usuario'];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php include('Menu.php'); ?>
        <h1 style="margin-top: 100px;">Seja Bem-Vindo(a) <?= $verUsuario ?>.</h1>
</body>

</html>