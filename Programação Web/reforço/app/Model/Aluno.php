<?php

class Aluno{
    private $matricula;
    private $nome;
    private $media1;
    private $media2;

    public function __construct(string $matricula,string $nome, float $media1, float $media2){
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->media1 = $media1;
        $this->media2 = $media2;
    }

    public function calcularMedia():float{
        return ($this->media1+$this->media2)/2;
    }

    public function mostrarSituacao():string{
        if ($this->calcularMedia() > 5){
            return "Aprovado";
        }
        return "Reprovado";
    }
}