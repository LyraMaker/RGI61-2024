<?php

$host = "localhost"; 
$dbname = "Alunos";
$username = "root";
$password = "masterkey";

try{
  //  $pdo = new PDO("sqlite:../Var/dado.sqlite"); O DSN do sqlite cria um arquivo na pasta designada, caso não exista o arquivo! Os outros tipos de bancos só se conectarão caso ele exista! 
$pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
  
}catch(PDOException $e){
    echo "Ocorreu um erro: ". $e->getMessage();
}