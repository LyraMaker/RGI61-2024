<?php

class Pessoa{
    var int $codigo;
    var string $nome;
    var int $altura;
    var int $idade;
    var string $nascimento;
    var string $escolaridade;
    var float $salario;

    function crescer(int $centimentros){
        $this->altura+=$centimentros; //$this significa que estarei utilizando como referência o objeto que invocou o método. 
    }

    function envelhecer(int $anos){
        $this->idade+=$anos;
    }
    function formar(string $titulo){
        $this->escolaridade = $titulo;
    }
}