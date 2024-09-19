<?php

class Produto{
    private string $codBarra;
    private string $nome;
    private float $preco;
    public function setCodigoBarra(string $codigo){
        $this->codBarra = $codigo;
    }
}