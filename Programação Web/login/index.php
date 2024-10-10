<?php

require __DIR__."/app/Controller/ValidarUsuario.php";

$alunoExiste = (new ValidarUsuario())->verificarSeExiste($_POST['usuario'],$_POST['senha']);

var_dump($alunoExiste);

