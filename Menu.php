<?php
    if(isset($_SESSION['usuario'])) {
        $verUsuario = $_SESSION['usuario'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <nav class="navbar justify-content-center" style="background-color: #e3f2fd;">
<ul class="nav justify-content-center">
<li class="nav-item">
  <a class="nav-link" href="#">Olá, <?= $verUsuario ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Admin.php">Início</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="AdicionarNoticia.php">Adicionar Notícia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Catalogo.php">Listar Notícias</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="Sair.php">Sair</a>
  </li>
</ul>
</nav>

</body>
</html>


