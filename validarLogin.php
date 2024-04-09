<?php
global $con;
session_start();
if (isset($_POST['login'])) {
    var_dump($_POST);
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        include "conexao.php";

        $sql = "SELECT * FROM `usuario` WHERE login = '$login' AND senha = '$senha'";

        if ($result = mysqli_query($con, $sql)) {
            $num_registros = mysqli_num_rows($result);
            if ($num_registros === 1) {
                $linha = mysqli_fetch_assoc($result);
                header("Location: /PagInicial.php?test=ok");
                $_SESSION['login'] = "admin";
            } else {
                $test = $_SERVER['HTTP_REFERER'];
                header("Location:$test");
            }
        } else {
            echo "Nenhum resultado do Banco de Dados";
        }
    }
}

?>

