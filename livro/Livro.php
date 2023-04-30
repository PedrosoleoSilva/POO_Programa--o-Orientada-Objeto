<?php


class Livro{

private $titulo;
private $autor;
private $editora;
private $preco;
private $desconto;
private $estoque;

public function __construct($titulo, $autor, $editora, $preco, $desconto, $estoque){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->editora = $editora;
    $this->preco = $preco;
    $this->desconto = $desconto;
    $this->estoque = $estoque;
}
public function getTitulo(){
    return $this->titulo;
}
public function setTitulo($titulo){
    $this->titulo = $titulo;
}
public function getAutor(){
    return $this->autor;
}
public function setAutor($autor){
    $this->autor = $autor;
}
public function getEditora(){
    return $this->editora;
}
public function setEditora($editora){
    $this->editora = $editora;
}
public function getPreco(){
    return $this->preco;
}
public function setPreco($preco){
    $this->preco = $preco;
}
public function getDesconto(){
    return $this->desconto;
}
public function setDesconto($desconto){
    $this->desconto = $desconto;
}
public function getEstoque(){
    return $this->estoque;
}
public function setEstoque($estoque){
    $this->estoque = $estoque;
}
public function  calcularPrecoComDesconto(){
     return $this->preco - round(($this->preco * ($this->desconto/100))) ;
     
}

public function exibirDetalhes(){
    echo "TITULO: " . $this->titulo . "<br>AUTOR: " . $this->autor . "<BR>EDITORA: " . $this->editora . "<BR>PREÇO: " . $this->preco . "<BR>DESCONTO: " . $this->desconto . "<BR>ESTOQUE: " . $this->estoque . "<br>VALOR FINAL COM DESCONTO: " . $this->calcularPrecoComDesconto();
}
}

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", "HarperCollins", 29.99, 10, 50);

$livro2 = new Livro("1984", "George Orwell", "Penguin Books", 15.99, 5, 30);

$livro3 = new Livro("Orgulho e Preconceito", "Jane Austen", "Vintage Classics", 12.99, 15, 20);

echo "" . $livro1->exibirDetalhes();
echo "<hr>";
echo "" . $livro2->exibirDetalhes();
echo "<hr>";
echo "" . $livro3->exibirDetalhes();
echo "<hr>";


$livro1->setTitulo("Os Hobbits");
$livro2->setPreco(16.99);
$livro3->setEditora("Penguin Books");

echo "" . $livro1->exibirDetalhes();
echo "<hr>";
echo "" . $livro2->exibirDetalhes();
echo "<hr>";
echo "" . $livro3->exibirDetalhes();
echo "<hr>";

$livro1->setDesconto(20);
$livro3->setDesconto(10);

echo "" . $livro1->exibirDetalhes();
echo "<hr>";
echo "" . $livro3->exibirDetalhes();



?>
