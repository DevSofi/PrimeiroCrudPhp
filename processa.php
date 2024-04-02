<?php
    global $con;
    include_once "conexao.php";
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="estilo.css">
     <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css" >
    <title>cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $endereco = $_POST['endereco'];

                $sql= "INSERT INTO `pessoas` ( `nome`, `email`, `telefone`, `endereco`) VALUES ('$nome','$email','$telefone','$endereco')";

                if ( mysqli_query($con,$sql))
                {
                    mensagem("$nome cadastrado com sucesso!",'success');
                }
                else
                {
                    mensagem("$nome NÃO foi cadastrado", 'danger');
                }
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

