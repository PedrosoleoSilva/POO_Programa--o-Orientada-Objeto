<?php
require_once"Pedido.php";
require_once"ItemCardapio.php";
Class Salada extends ItemCardapio{
    protected string $ingredientesPrincipais;
    protected bool $incluiProteina;

    //public function __construct(int $id, string $descricao, float $preco, int $quantidade, string $ingredientesPrincipais){
       // parent::__construct( $id, $descricao, $preco, $quantidade);
      // $this->ingredientesPrincipais = $ingredientesPrincipais;

        
    //}
    
    public function __construct(int $id, string $descricao, float $preco, int $quantidade, string $tamanho, string $ingrediente, Pedido $pedido){
        parent::__construct( $id, $descricao, $preco, $quantidade, $pedido);
        $this->incluiProteina = true;
        $this->ingredientesPrincipais = $ingrediente;
    }
    public function getIngredientesPrincipais(): string
    {
        return $this->ingredientesPrincipais;
    }
    public function setIngredientesPrincipais(string $ingredientesPrincipais): self
    {
        $this->ingredientesPrincipais = $ingredientesPrincipais;

        return $this;
    }
    public function proteina(){
        $this->incluiProteina = true;
    }
    public function naoProteina(){
        $this->incluiProteina = false;
    }
    //public function incluiProteina(){
        
   // }
    public function calcularPrecoFinal(){
    
            return $this->preco * $this->quantidade;
        
    }
    public function exibirDetalhesSalada(){
        echo"<br>ID = " . $this->id;
        echo "<br>Descrição Pedido = " . $this->descricao;
        echo"<br>Valor do Item = " . $this->preco;
        echo"<br>Quantidade = " . $this->quantidade;
        echo"<br>Igredientes = " . $this->ingredientesPrincipais;
    }
}