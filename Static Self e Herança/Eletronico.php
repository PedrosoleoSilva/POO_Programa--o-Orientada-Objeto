<?php

class Eletronico extends Produto{
    private int $watts;
    public function __construct($id, $nome, $preco, $quantidade, $watts){
        parent::__construct($id,$nome,$preco,$quantidade);
        
    }  
    public function getWatts(): int
    {
        return $this->watts;
    }
    public function setWatts(int $watts): self
    {
        $this->watts = $watts;

        return $this;
    }
}