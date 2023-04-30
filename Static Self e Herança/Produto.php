<?php 

class Produto {
    private int $id;
    private string $nome;
    private float $preco;
    private int $quantidade; // tive que criar para listae quantidade do estoque
    private static $totalCadastrado = 0;

    public function __construct(int $id, string $nome, float $preco, int $quantidade){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$totalCadastrado++;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    public function getPreco(): float
    {
        return $this->preco;
    }
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quantidade): self{
        $this->quantidade = $quantidade;
        return $this;
    }
    public static function getTotalCadastrado(){
        return self::$totalCadastrado;
    }
 }

