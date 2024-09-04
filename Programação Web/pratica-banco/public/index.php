<?php

require __DIR__ . "/../app/Data/ConectarBanco.php";

//Ele escreverá o endereço completo a partir do local que você está.

$sql = "CREATE TABLE IF NOT EXISTS ALUNO(
matricula VARCHAR(5) NOT NULL PRIMARY KEY,
nome TEXT)";

$pdo->query($sql);
