<?php
session_start();
if (isset($_SESSION['login'])) {
$_POST= $_SESSION['login'];
}
else{
    session_destroy();
    header("Location:../index.php?msg=Voce foi banido");
}

