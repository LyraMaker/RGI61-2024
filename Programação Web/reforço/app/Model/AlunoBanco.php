<?php
require __DIR__ . "/Aluno.php";

class AlunoBanco
{
    private $pdo;
    public function __construct()
    {
        require __DIR__ . "/../Data/conectar.php";
        $this->pdo = $banco;
    }
    public function retornarTodosAlunos(): array
    {
        $banco = $this->pdo;
        $sql = "SELECT * FROM alunos";

        $resultado = $banco->query($sql);

        return $this->hidratar($resultado->fetchAll(PDO::FETCH_ASSOC));
    }

    public function inserirAluno($matricula, $nome, $media1, $media2)
    {
        $sql = "INSERT INTO alunos (matricula,nome,media1,media2) VALUES(:m,:n,:m1,:m2)";
        $preparar = $this->pdo->prepare($sql);
        $preparar->bindValue("m", $matricula, PDO::PARAM_STR);
        $preparar->bindValue(":n", $nome, PDO::PARAM_STR);
        $preparar->bindValue(":m1", $media1, PDO::PARAM_STR);
        $preparar->bindValue(":m2", $media2, PDO::PARAM_STR);

        $preparar->execute();
    }

    public function hidratar($array): array
    {
        $alunos = [];
        foreach ($array as $objeto) {
            $alunos[] = new Aluno($objeto['matricula'], $objeto['nome'], $objeto['media1'], $objeto['media2']);
        }
        return $alunos;
    }

    public function atualizarAluno($matricula, $novoNome, $novaMedia1, $novaMedia2)
    {
        $sql = "UPDATE alunos SET nome = :n, media1 = :m1, media2 = :m2 WHERE matricula = :m";
        $preparar = $this->pdo->prepare($sql);
        $preparar->bindValue(":m", $matricula, PDO::PARAM_STR);
        $preparar->bindValue(":n", $novoNome, PDO::PARAM_STR);
        $preparar->bindValue(":m1", $novaMedia1, PDO::PARAM_STR);
        $preparar->bindValue(":m2", $novaMedia2, PDO::PARAM_STR);

        return $preparar->execute();
    }

    public function buscarAlunoPorMatricula($matricula)
    {
        $sql = "SELECT * FROM alunos WHERE matricula = :m";
        $preparar = $this->pdo->prepare($sql);
        $preparar->bindValue(":m", $matricula, PDO::PARAM_STR);
        $preparar->execute();

        $resultado = $preparar->fetch(PDO::FETCH_ASSOC);
        if ($resultado) {
            return new Aluno($resultado['matricula'], $resultado['nome'], $resultado['media1'], $resultado['media2']);
        }
        return null;
    }

    public function excluirAlunoPorMatricula($matricula)
    {
        $sql = "DELETE FROM alunos WHERE matricula = :m";
        $preparar = $this->pdo->prepare($sql);
        $preparar->bindValue(":m", $matricula, PDO::PARAM_STR);

        return $preparar->execute();
    }
}
