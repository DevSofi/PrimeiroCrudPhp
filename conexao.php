<?php
$servidor = "localhost";
$usuario = "root";
$senha_banco = "";
$dbname = "cadastrocrud";
$con = mysqli_connect($servidor, $usuario, $senha_banco, $dbname);

if (!$con)
{
    die('Falha na conexão: ' . mysqli_connect_error());
}

function mensagem($texto,$tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
    $texto
    </div>";
}

