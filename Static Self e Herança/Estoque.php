
<?php
require_once "Produto.php";
require_once "Eletronico.php";
class Estoque {

    private  array $produtos = [];


    public  function adicionarProduto(Produto $produto) : void {
       // echo"Adicionar produto " . $produto->getNome();
        //echo"Adicionar preço " . $produto->getPreco();
        //echo"Adicionar produto " . $produto->getNome();

        $this->produtos[] = $produto; // ele jooga produto dentro do array produtos
    }

    public function removerProduto(int $id){
        foreach($this->produtos as $key => $produto){ // pega array produtos que tem produto com a key"id" do produto
            if($produto->getId() === $id){ //verefica se id sao iguais para pegar e remover
                unset($this->produtos[$key]); // unset e para remover pegando a key id 
            }
        }
    }
    public function exibirProduto() : array {
        return $this->produtos;  // vai retorna os valores que tem dentro do array estoque
    }
  //  public static function compararPreco($nome1, $nome2){
       // foreach(Produto::$produtos as $produto){
         //   if($produto["nome"] == $nome1){
          //      $nome1 = $produto->getPreco();
         //   } if($produto["nome"] == $nome2){
         //       $nome2 = $produto->getPreco();
       //     }
      //  } if($nome1 > $nome2){
        //    echo"O produto " . $nome1 . "é mais caro";
      //  }else {
        //    echo"O produto " . $nome2 . "É mais caro";
      //  }
   // }
}