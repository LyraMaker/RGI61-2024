<?php

require __DIR__ . "/../app/Data/ConectarBanco.php";
require __DIR__ . "/../app/Controller/ControllerAluno.php";

//Ele escreverá o endereço completo a partir do local que você está.


$controladorAluno = new ControllerAluno();

var_dump($controladorAluno->exibirTodos());