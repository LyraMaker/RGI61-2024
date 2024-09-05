<?php

require __DIR__ . "/../app/Data/ConectarBanco.php";

//Ele escreverá o endereço completo a partir do local que você está.

$sql = "SELECT * FROM ALUNO";

$valores = $pdo->query($sql);

$alunos = $valores->fetchAll(PDO::FETCH_ASSOC);

foreach ($alunos as $aluno) {
    echo $aluno["matricula"]." ".$aluno["nome"]."<br>";
}
