<?php
    session_start();

    if(isset($_SESSION['usuario'])) {
        $verUsuario = $_SESSION['usuario'];
    }
?>

<?php include('Menu.php'); ?>
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
    <?php
    if(isset($_SESSION['msg'])) { ?>
        <h2 class="alert alert-success" role="alert" style="font-family: Arial, sans-serif;font-size:15px;padding:10px;text-align: center;"><?= $_SESSION['msg'] ?></h2>
    <?php 
        unset($_SESSION['msg']);
    } 
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="ProcessaNoticia.php" method="POST" class="form">
                    <h1>Dados da Notícia</h1>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" name="titulo" class="form-control" id="titulo">
                        </div>
                        <div class="mb-3">
                            <label for="resumo" class="form-label">Resumo</label>
                            <input type="text" name="resumo" class="form-control" id="resumo">
                        </div>
                        <div class="mb-3">
                            <label for="conteudo" class="form-label">Conteúdo</label>
                            <textarea  name="conteudo" class="form-control" id="conteudo" rows="3"></textarea>
                        </div>
                        <input type="submit" name="adicionar" id="btnAdicionar" value="Adicionar" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>

</body>

</html>