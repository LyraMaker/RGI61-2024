<?php

require "Aluno.php";

$paulin = new Aluno('001','Paulin',5,0);

$valorMedia = $paulin->calcularMedia(5,0);

echo $paulin->mostrarSituacao($valorMedia);