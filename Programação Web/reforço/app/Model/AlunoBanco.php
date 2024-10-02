<?php
require __DIR__."/Aluno.php";

class AlunoBanco{
    private $pdo;
    public function __construct(){
        require __DIR__."/../Data/conectar.php";
        $this->pdo = $banco;
    }
    public function retornarTodosAlunos():array{
        $banco = $this->pdo;
        $sql = "SELECT * FROM alunos";

        $resultado = $banco->query($sql);

        return $this->hidratar($resultado->fetchAll(PDO::FETCH_ASSOC));
    }

    public function inserirAluno($matricula,$nome,$media1,$media2){
        $sql = "INSERT INTO alunos (matricula,nome,media1,media2) VALUES(:m,:n,:m1,:m2)";
        $preparar = $this->pdo->prepare($sql);
        $preparar->bindValue("m",$matricula,PDO::PARAM_STR);
        $preparar->bindValue(":n",$nome,PDO::PARAM_STR);
        $preparar->bindValue(":m1",$media1,PDO::PARAM_STR);
        $preparar->bindValue(":m2",$media2,PDO::PARAM_STR);

        $preparar->execute();
    }

    public function hidratar($array):array{
        $alunos = [];
        foreach($array as $objeto){
            $alunos[] = new Aluno($objeto['matricula'],$objeto['nome'],$objeto['media1'],$objeto['media2']);
        }
        return $alunos;
    }
}