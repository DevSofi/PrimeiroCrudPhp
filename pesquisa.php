<!doctype html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet"  href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.rtl.css" >
    <title>pesquisa</title>
</head>
<body>
    <?php
        $pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';
        global $con;
        include "conexao.php";

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

        $dados= mysqli_query($con, $sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container d-flex justify-content-start">
                    <h1 class="text-center">Pesquisa</h1>
                    <div class="container-fluid">
                    <form class="d-flex"  action="pesquisa.php" method="post" >
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                    </div>
            </div>
                    <div class="pesquisar" >
                        <nav class="navbar bg-body-tertiary">
<!--                            <div class="container-fluid">-->
<!--                                <form class="d-flex"  action="pesquisa.php" method="post" >-->
<!--                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca" autofocus>-->
<!--                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>-->
<!--                                </form>-->
<!--                            </div>-->
                        </nav>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">funções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($linha = mysqli_fetch_assoc($dados))
                                    {
                                        $id = $linha['id'];
                                        $nome = $linha['nome'];
                                        $email = $linha['email'];
                                        $telefone=$linha['telefone'];
                                        $endereco = $linha['endereco'];

                                        echo"
                                        <tr>
                                            <th scope='row'>$nome</th>
                                            <td>$email</td>
                                            <td>$telefone</td>
                                            <td>$endereco</td>
                                            <td>
                                                <a href='editar.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                                                <a href='excluir.php' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" .'"' ."pegar_dados($id, '$nome')" .'"' .">Excluir</a>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                                <tr>
                                    <th scope='row'>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                    <div class="botaoExcluir">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="excluir.php" method="post">
                    <p>Deseja realmente excluir</p>
                    <p id="nome_pessoa">Nome da pessoa </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nome" id="nome_pessoa_1" value="">
                    <input type="submit" class="btn btn-danger" value="Sim">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function pegar_dados(id,nome){
            console.log(nome);
            document.getElementById('id').value= id;
            document.getElementById('nome_pessoa_1').value= nome;
            document.getElementById('nome_pessoa').innerHTML= nome;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>