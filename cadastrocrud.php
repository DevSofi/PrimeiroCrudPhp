<?php
    include_once "conexao.php";
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css" >
    <title>cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>FORMULÁRIO</h3>
                <form action="processa.php" method="post" >
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" name="telefone" id="telefone">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="submit" class="btn btn-success" value="Salvar dados">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

