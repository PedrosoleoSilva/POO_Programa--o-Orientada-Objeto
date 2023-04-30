<?php
require_once"Pedido.php";
require_once"Salada.php";
require_once"Pizza.php";
require_once"Massa.php";

class ItemCardapio extends Pedido{
    protected int $id;
    protected string $descricao;
    protected float $preco;
    protected int $quantidade;
    protected Pedido $pedido;

    public function __construct(int $id, string $descricao, float $preco, int $quantidade, Pedido $pedido ){
        $this->setId($id);
        $this->setDescricao($descricao);
        $this->setPreco($preco);
        $this->setQuantidade($quantidade);
        $this->pedido = $pedido;
    }
    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id): self {
        if(!empty($id)){
         $this->id = $id;
             return $this;
        }else{
            echo"O id não pode ser nulo!";
        }
        
    }
    public function getDescricao(): string {
        return $this->descricao;
    }
    public function setDescricao(string $descricao): self {
        if(!empty($descricao)){
             $this->descricao = $descricao;
        return $this;
        }else{
            echo"A descrição não pode ser vazia!";
        }
       
    }
    public function getPreco(): float {
        return $this->preco;
    }
    public function setPreco(float $preco): self {
        if(!empty($preco)){
            if($preco >0){
            $this->preco = $preco;
        return $this;
            }else{
                echo"O valor não pode ser negativo!";                
            }
        }else{
            echo"O preço não pode ser nulo!";
        }
        
    }
    public function getQuantidade(): int {
        return $this->quantidade;
    }
    public function setQuantidade(int $quantidade): self {
        if(!empty($quantidade)){
            if($quantidade >=0){
             $this->quantidade = $quantidade;
        return $this;
            }else{
                echo"A quantidade não pode ser negativa!";
            }
        }else {
            echo"O valor não pode ser nulo!";
        }
       
    }
   // public function getPedido(): Pedido {
     //   return $this->Pedido;
    //}
    //public function setPedido(Pedido $pedido): self {
      //  $this->Pedido = $pedido;
      //  return $this;
    //}
    public function calcularPrecoFinal(){
        return $this->preco *  $this->quantidade;
    }
}
