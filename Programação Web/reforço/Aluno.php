<?php

class Aluno{
    private $matricula;
    private $nome;
    private $media1;
    private $media2;

    public function __construct(string $matricula,string $nome){
        $this->matricula = $matricula;
        $this->nome = $nome;
    }

    public function calcularMedia(float $nota1,float $nota2):float{
        return ($nota1+$nota2)/2;
    }

    public function mostrarSituacao(float $media):string{
        if ($media > 5){
            return "Aprovado";
        }
        return "Reprovado";
    }
}