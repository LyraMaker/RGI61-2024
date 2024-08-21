<?php

class Pessoa{
    var int $codigo;
    var string $nome;
    var int $altura;
    var int $idade;
    var string $nascimento;
    var string $escolaridade;
    var float $salario;

    function __construct(int $codigo, string $nome, int $altura, int $nascimento){
        $this->codigo = $codigo;
        $this->setNome($nome);
        $this->altura = $altura;
        $this->setNascimento($nascimento);
    }

      function setNome(string $nome){ // Essa funcionalidade irá definir o valor no atributo nome
        $this->nome = $nome;
    }

    function setNascimento(string $anoNascimento){
        $this->nascimento = $anoNascimento;
        $anoAtual = date("Y");
        $this->idade = $anoAtual - $anoNascimento;
    }
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