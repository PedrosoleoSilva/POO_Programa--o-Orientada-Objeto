<?php
require_once"Pedido.php";
require_once"ItemCardapio.php";
Class Pizza extends ItemCardapio{
    protected string $tamanho;
    protected string $ingrediente;


    public function __construct(int $id, string $descricao, float $preco, int $quantidade, string $tamanho, string $ingrediente, Pedido $pedido){
    parent::__construct( $id, $descricao, $preco, $quantidade, $pedido);
    $this->tamanho = $tamanho;
    $this->ingrediente = $ingrediente;
}
    public function getTamanho(): string{
        return $this->tamanho;
    }
    public function setTamanho(string $tamanho): self{
        $this->tamanho = $tamanho;

        return $this;
    }
    public function getIngrediente(): string
    {
        return $this->ingrediente;
    }
    public function setIngrediente(string $ingrediente): self
    {
        $this->ingrediente = $ingrediente;

        return $this;
    }
    public function calcularPrecoFinal(){
        return $this->preco * $this->quantidade;
    }
    public function exibirDetalhes(){
        echo"<br>ID = " . $this->id;
        echo "<br>Descrição Pedido = " . $this->descricao;
        echo"<br>Valor do Item = " . $this->preco;
        echo"<br>Quantidade = " . $this->quantidade;
        echo"<br>Igredientes = " . $this->ingrediente;
    }
    
}