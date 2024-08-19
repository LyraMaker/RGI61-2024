<?php 
include "Pessoa.php";

$carlin = new Pessoa();
$carlin->codigo = 171;
$carlin->nome = "Carlos Zinho da Silva Silveira";
$carlin->altura = 130;
var_dump($carlin);
$carlin->crescer(100);
echo "---------- \n";
var_dump($carlin);