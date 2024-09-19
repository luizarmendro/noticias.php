<?php
//verifica se a sessão já está ativa antes de iniciar
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario'])) {
    $verUsuario = $_SESSION['usuario'];
} else {
    $verUsuario = 'Convidado';
}

include("Menu.php");
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <?php 
        if (isset($_SESSION['noticias'])) {
            $noticias = $_SESSION['noticias'];
            //percorre o array de noticias
            for ($i = 0; $i < count($noticias); $i++) {
                if (isset($noticias[$i]['titulo']) && isset($noticias[$i]['resumo']) && isset($noticias[$i]['conteudo'])) {
                ?>
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <?= $noticias[$i]['titulo'] ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $noticias[$i]['resumo']?></h5>
                                <p class="card-text"><?= $noticias[$i]['conteudo'].'...'?></p>
                                <!-- aloca o ID da noticia que cliclar em ver mais e redireciona para a page da noticia identificada-->
                                <a href="VerNoticia.php?id=<?= $i ?>" class="btn btn-primary w-100">Ler mais</a>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    echo '<p>Erro ao exibir a notícia. Formato inválido.</p>';
                }
            }
        } else {
            echo '<p>Nenhuma notícia publicada.</p>';
        }
        ?>
    </div>
</div>