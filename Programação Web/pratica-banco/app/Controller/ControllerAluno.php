<?php
require __DIR__ . "/../Model/Aluno.php";


use Aluno; // Permite com que a gente consiga incluir a utilização da classe, desde a estrutura até as suas funcionalidades.
class ControllerAluno
{
    private $pdo;

    public function __construct()
    {
        require __DIR__ . "/../Data/ConectarBanco.php";
        $this->pdo = $pdo;
    }

    public function exibirTodos()
    {
        $sql = "SELECT * FROM ALUNO";
        $valores = $this->pdo->query($sql);
        //$alunos = $valores->fetch(PDO::FETCH_ASSOC);
        $alunos = $valores->fetchAll(PDO::FETCH_ASSOC);
        return $this->hydrateAll($alunos);
    }

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

    public function nomeAlunos(array $valorArray)
    {
        foreach ($valorArray as $valorUnico) {
            echo $valorUnico->getNome();
        }
    }
}
