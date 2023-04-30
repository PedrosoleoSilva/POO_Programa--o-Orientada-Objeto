<?php
require_once"Pedido.php";
require_once"Salada.php";
require_once"Pizza.php";
require_once"Massa.php";
class Pedido{

    protected $idPedido;
    protected $precoTotal;
    protected static $contadorPedidos = 0;
   

    public function __construct(){
        $this->idPedido = ++self::$contadorPedidos;
        $this->precoTotal = 0;
       
    } 
    public function getIdPedido(){
        return $this->idPedido;
    }
    public function getPrecoTotal(){
        return $this->precoTotal;
    }
    public function adicionarItem(ItemCardapio $item){
        if ($item instanceof ItemCardapio) {     //verefica se o objeto criado pertence a essa classe
            $this->precoTotal += $item->calcularPrecoTotal();
        }
    }
    public function removerItem(ItemCardapio $item){

    }
    public function calcularPrecoTotal(){
            return $this->precoTotal;
    }
   

}
