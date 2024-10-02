<?php

/* $host = "localhost";
$username= "root";
$password = "masterkey";
$dbname = "escola";
*/

try {
    $banco = new PDO("sqlite:".__DIR__."/../../banco.sqlite");
} catch (PDOException $e) {
   echo "Não foi possivel conectar com o banco!";
}
