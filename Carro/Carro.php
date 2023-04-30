<?php

class Carro {

private $marca;
private $modelo;
private $ano;
private $cor;
private $preco;

public function __construct($marca, $modelo, $ano, $cor, $preco)
{
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->cor = $cor;
    $this->preco = $preco;
}

public function getMarca(){
    return $this->marca;
}
public function setMarca($marca){
    if($marca = $marca){
        $this->marca = $marca;
    } else {
        echo"ERRADO!!!";
    }
}
public function getModelo(){
    return $this->modelo;
}
public function setModelo($modelo){
    if($modelo = $modelo){
        $this->modelo = $modelo;
    }else {
        echo"ERRADO!!!";
    }
    
}
public function getAno(){
    return $this->ano;
}
public function setAno($ano){
    if( $ano = $ano){
    $this->ano = abs($ano);
    }else {
        echo"ERRADO!!!";
    }
}
public function getCor(){
    return $this->cor;
}
public function setCor($cor){
    if($cor = $cor){
    $this->cor = $cor;
    }else{
        echo"ERRADO!!!";
    }
}
public function getPreco(){
    return $this->preco;
}
public function setPreco($preco){
    if($preco = $preco){
    $this->preco = abs($preco);
    }else {
        echo "ERRADO!!!";
    }
}
public function exibirDetalhes(){
    echo "MARCA: " . $this->marca . "<BR>MODELO: " . $this->modelo . "<BR>ANO: " . $this->ano . "<BR>COR: " . $this->cor
    . "<BR>PREÇO: " . $this->preco;
}
}

$carro1= new Carro("Honda", "Civic", 2023, "Azul", 125000);
$carro2= new Carro("Toyota", "Corolla", 2022, "Prata", 123000);
$carro3= new Carro("Ford", "Focus", 2021, "Vermelho", 91000);

echo "" . $carro1->exibirDetalhes();
echo "<hr>";
echo "<br>" . $carro2->exibirDetalhes();
echo "<hr>";
echo "" . $carro3->exibirDetalhes();
echo "<hr>";

$carro2->setModelo("Corolla Cross");
$carro1->setCor("Preto");
$carro3->setPreco(20000);


echo "" . $carro1->exibirDetalhes();
echo "<hr>";
echo "<br>" . $carro2->exibirDetalhes();
echo "<hr>";
echo "" . $carro3->exibirDetalhes();
echo "<hr>";

?>