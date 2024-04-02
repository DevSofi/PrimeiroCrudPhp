<?php
global $con;
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css" >
    <title>exclusão de cadastro</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        include "conexao.php";

        $id= $_POST['id'];
        $nome = $_POST['nome'];

        $sql=  "DELETE from `pessoas` WHERE id = $id";

        if ( mysqli_query($con,$sql))
        {
            mensagem("$nome excluido com sucesso!",'success');
        }
        else
        {
            mensagem("$nome NÃO foi excluido", 'danger');
        }
        mysqli_close($con);
        ?>
        <a href="cadastrocrud.php" class="btn btn-primary">Voltar</a>
        <a href="pesquisa.php" class=" btn btn-success">Pesquisar</a>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
</script>
</body>
</html>

