<?php

require __DIR__ . "/app/Controller/ValidarUsuario.php";
require __DIR__. "/header.php";

if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header("Location:./login.php");
}


if ($_POST['usuario'] == "") {
    die("Campo usuário está vazio!");
}
if ($_POST['senha'] == "") {
    die("Campo senha está vazio!");
}

$alunoExiste = (new ValidarUsuario())->verificarSeExiste($_POST['usuario'], $_POST['senha']);

if (empty($alunoExiste)) {
    die("Este usuário não existe!");
}


echo "Usuário validado!";
