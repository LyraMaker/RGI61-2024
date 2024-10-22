<?php
require __DIR__."/User.php";

use User;
class UserBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarUsuario($nome,$senha,$ativo){
        $sql = "INSERT INTO usuarios(nome,senha,perfil_ativo) values (:u,:p,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function verificarSeExiste($usuario,$senha){
        $sql = "SELECT * FROM usuarios WHERE nome=:u and senha = :s and perfil_ativo = TRUE";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$usuario);
        $comando->bindValue("s",$senha);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarUsuario(){
        $sql = "SELECT * FROM usuarios";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new User();
            $objeto->setUsername($dado['nome']);
            $objeto->setPassword($dado['senha']);
            $objeto->setAtivo($dado['perfil_ativo']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}