<?php
session_start();

//verifica se o ID da notícia foi passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //eerifica se o array de notícias existe na sessão
    if (isset($_SESSION['noticias']) && isset($_SESSION['noticias'][$id])) {
        $noticia = $_SESSION['noticias'][$id];
    } else {
        echo '<p>Notícia não encontrada.</p>';
        exit;
    }
} else {
    echo '<p>ID da notícia não especificado.</p>';
    exit;
}

include("Menu.php");
?>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2><?= $noticia['titulo']?></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?=$noticia['resumo']?></h5>
            <p class="card-text"><?=$noticia['conteudo']?></p>
            <a href="Catalogo.php" class="btn btn-primary w-100">Voltar às notícias</a>
        </div>
    </div>
</div>