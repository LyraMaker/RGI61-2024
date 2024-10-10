<?php

require __DIR__ . "/app/Controller/ValidarUsuario.php";
require __DIR__ . "/header.php";

if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header("Location:./login.php");
}


if ($_POST['usuario'] == "") {
    $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Usuário vazio
        </div>';
    die($mensagem);
}
if ($_POST['senha'] == "") {
    $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Senha vazia
        </div>';
    die($mensagem);
}

$alunoExiste = (new ValidarUsuario())->verificarSeExiste($_POST['usuario'], $_POST['senha']);

if (empty($alunoExiste)) {
    die("Este usuário não existe!");
}

$mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
echo $mensagem;
