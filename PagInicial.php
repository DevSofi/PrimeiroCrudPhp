<?php
    if($_SERVER['REQUEST_URI'] != '/PagInicial.php?test=ok') {
        include('validarLogin.php');
    }


?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet"  href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css">
    <title>inicio</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="flex-xxl-column">
            <h1 class="display-5">Cadastro </h1>
            <hr class="my-5">
            <p>Acesse as funções.</p>
            <a class="btn btn-primary btn-lg" href="../crud/cadastrocrud.php" role="button">Cadastro</a>
            <a class="btn btn-primary btn-lg" href="../crud/pesquisa.php" role="button">Pesquisar</a>
            <a class="btn btn-danger btn-lg" href="../crud/index.php" role="button">Sair</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


