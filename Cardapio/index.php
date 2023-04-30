<?php
require_once"Pedido.php";
require_once"ItemCardapio.php";
require_once"Salada.php";
require_once"Pizza.php";
require_once"Massa.php";

$pedido = new Pedido(1);
$pedido1 = new Pedido(2);
$pedido2 = new Pedido(3);
$pizza = new Pizza(1,"PIZZA PORTUGUESA", 30, 5, "G", "MOLHO, QUEIJO, MANJERICÃO ", $pedido);
$massa = new Massa(1," ESPAGUETE À BOLONHESA",25,10,"G","ESPAGUETE, MOLHO À BOLONHESA", $pedido);
$salada = new Salada(1," SALADA CAESAR",20,8,"G","ALFACE, CROUTONS, QUEIJO PARMESÃO",$pedido);

$pedido->adicionarItem($pizza);
$pedido1->adicionarItem($massa);
$pedido2->adicionarItem($salada);


echo"==============================PEDIDO==============================================<br>";
echo"<br>PEDIDO NUMERO = " . $pedido->getIdPedido();
echo"<br>===============================================";
//echo"<br>INCLUÍDO PEDIDO NUMERO = " . $pedido->adicionarItem();
echo"<br>DESCRIÇÃO DO PEDIDO = " . $pizza->getDescricao();
echo"<br>VALOR DO ITEM = " . $pizza->getPreco();
echo"<br>QUANTIDADE = " . $pizza->getQuantidade();
echo"<br>INGREDIENTES = " . $pizza->getIngrediente();
echo"<br>PREÇO TOTAL PIZZA = " . $pizza->calcularPrecoFinal();
echo"<br>----------------------------------------------------------------------------------------";

echo"<br>PEDIDO NUMERO = " . $pedido1->getIdPedido();
echo"<br>===============================================";
//echo"<br>INCLUÍDO PEDIDO NUMERO = " . $pedido->adicionarItem();
echo"<br>DESCRIÇÃO DO PEDIDO = " . $massa->getDescricao();
echo"<br>VALOR DO ITEM = " . $massa->getPreco();
echo"<br>QUANTIDADE = " . $massa->getQuantidade();
echo"<br>INGREDIENTES = " . $massa->getIngredientes();
echo"<br>PREÇO TOTAL MASSA = " . $massa->calcularPrecoFinal();
echo"<br>----------------------------------------------------------------------------------------";

echo"<br>PEDIDO NUMERO = " . $pedido2->getIdPedido();
echo"<br>===============================================";
echo"<br>INCLUÍDO PEDIDO NUMERO = " . $pedido->getIdPedido();
echo"<br>DESCRIÇÃO DO PEDIDO = " . $salada->getDescricao();
echo"<br>VALOR DO ITEM = " . $salada->getPreco();
echo"<br>QUANTIDADE = " . $salada->getQuantidade();
echo"<br>INGREDIENTES = " . $salada->getIngredientesPrincipais();
echo"<br>PREÇO TOTAL SALADA = " . $salada->calcularPrecoFinal();
echo"<br>----------------------------------------------------------------------------------------";
;








