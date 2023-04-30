<?php
require_once "Produto.php";
require_once "Estoque.php";
require_once "Eletronico.php";

//criacao de produtos
$produto = new Produto(1, 'Leite', 12.90, 10);
$produto1 = new Produto(2, 'Cafe', 11.90, 5);
$produto2 = new Produto(3, 'Feijão', 11.90, 5);

 //adicionando produto na classe heranca de produtos
$eletronico = new Eletronico(4, "TV", 120, 50, 110);
$eletronico->setWatts(110);


//adiciona produto dentro de estoque
$estoque = new Estoque();
$estoque->adicionarProduto($produto);
$estoque->adicionarProduto($produto1);
$estoque->adicionarProduto($produto2);
$estoque->adicionarProduto($eletronico);

echo"Lista de Produtos<br>";

$produtos = $estoque->exibirProduto();
foreach($produtos as $produto){
   echo"<br>Nome = " . $produto->getNome() . "<br>";
   echo"Preço = " . $produto->getPreco() . "<br>";
   echo"Quantidade = " . $produto->getQuantidade() . "<br>";
   

}
echo "<hr>";
echo "Lista Produtos Atualizada - Pos remoção de um produto<br>";
$estoque->removerProduto(1);

$produtos = $estoque->exibirProduto();
foreach($produtos as $produto){
   echo"<br>Nome = " . $produto->getNome() . "<br>";
   echo"Preço = " . $produto->getPreco() . "<br>";
   echo"Quantidade = " . $produto->getQuantidade() . "<br>";
}
echo"<hr>";
//echo "Watts TV = " . $eletronico->getWatts();


//$estoque::compararPreco("Leite", "Cafe");


