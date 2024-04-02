<?php
    global $con;
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css" >
    <title>alteração de cadastro</title>
</head>
<body>
<?php
include "conexao.php";
    $id= isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT *  FROM `pessoas` WHERE id = $id";
    $dados= mysqli_query($con, $sql);
    $linha = mysqli_fetch_assoc($dados);
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>editar</h3>
                <form action="alteracaoEdit.php" method="post" >
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" id="nome"
                               required value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email"
                               required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" name="telefone" id="telefone"
                               required value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco"
                               required value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="submit" class="btn btn-success" value="salvar alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['id']?>" >
                    </div>

                </form>
                <br>
                <a href="pesquisa.php" class="btn btn-info">Voltar para o início </a>
            </div>
        </div>
    </div>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">

</script>
</body>
</html>


