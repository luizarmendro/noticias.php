<?php
session_start();

if (isset($_POST['titulo']) && isset($_POST['resumo']) && isset($_POST['conteudo'])) {
    $titulo = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $conteudo = $_POST['conteudo'];

    // eerifica se existem notícias na sessão
    $noticias = array();
    if (isset($_SESSION['noticias'])) {
        // recupera da sessão
        $noticias = $_SESSION['noticias'];
    }

    // adiciona a nova notícia
    if (!empty($titulo) && !empty($resumo) && !empty($conteudo)) {
        $nova_noticia = array(
            'titulo' => $titulo,
            'resumo' => $resumo,
            'conteudo' => $conteudo
        );

        array_push($noticias, $nova_noticia);
        $_SESSION['noticias'] = $noticias; // atualiza as notícias na sessão
        $_SESSION['msg'] = "Notícia '$titulo' adicionada com sucesso!";
    } else {
        $_SESSION['msg'] = "Erro: Nenhum campo da notícia pode estar vazio.";
    }

    header('location: AdicionarNoticia.php'); // redireciona de volta para a página de adicionar
}
?>
