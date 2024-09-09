<?php

require __DIR__ . "/../app/Data/ConectarBanco.php";
require __DIR__ . "/../app/Controller/ControllerAluno.php";

//Ele escreverá o endereço completo a partir do local que você está.

$sql = "SELECT * FROM ALUNO";

$valores = $pdo->query($sql);

$alunos = $valores->fetchAll(PDO::FETCH_ASSOC);

$controladorAluno = new ControllerAluno();

$todosAlunos = $controladorAluno->hydrateAll($alunos);

var_dump($todosAlunos);

echo $todosAlunos[0]->getNome();