<?php

class Aluno
{
    private string $nome;
    private string $matricula;

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setMatricula(string $matricula)
    {
        $this->matricula = $matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getMatricula(): string
    {
        return $this->matricula;
    }
}
