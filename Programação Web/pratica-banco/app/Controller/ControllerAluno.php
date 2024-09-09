<?php
require __DIR__ . "/../Model/Aluno.php";

use Aluno; // Permite com que a gente consiga incluir a utilização da classe, desde a estrutura até as suas funcionalidades.
class ControllerAluno extends Aluno
{
    public function hydrateAll(array $valorArray)
    {
        $todosAlunos = [];
        foreach ($valorArray as $valorUnico) {

            $novoAluno = new Aluno();
            $novoAluno->setNome($valorUnico['nome']);
            $novoAluno->setMatricula($valorUnico['matricula']);

            $todosAlunos[] = $novoAluno;
        }
        return $todosAlunos;
    }


}
