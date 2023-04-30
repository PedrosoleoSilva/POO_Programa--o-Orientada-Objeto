<?php 

class Veiculo {
    protected $marca;
    protected $modelo;
    protected $cor;
    protected $velocidade;
    protected $passageiros;
    protected $ligado;

    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->velocidade =0;
        $this->passageiros = 0; // nao e requisito, por isso nao passa no construct()
        $this->ligado = false; 
        
    }

    public function acelerar($incremento){ //metodo acelerar
      if($this->ligado === true){
        $novaVelocidade = $this->velocidade + $incremento; // cria variavel, vai receber velocidade + o incremento
        if($novaVelocidade >=0 && $novaVelocidade <=300){
            $this->velocidade = $novaVelocidade;
        }else {
            echo "A velocidade deve ser entre 0 - 300 km/h<br>";
        }
      }else {
        echo "O veiculo está desligado.<br>";
      }
    }
    
    public function frear($decremento){
        if($this->ligado === true){
            $novaVelocidade = $this->velocidade - $decremento; 
            if($novaVelocidade >=0 && $novaVelocidade <=300){
                $this->velocidade = $novaVelocidade;
            }else {
                echo "A velocidade deve ser entre 0 - 300 km/h<br>";
            }
          }else {
            echo "O veiculo está desligado.<br>";
          }
    }

    public function getVelocidade(){
        return $this->velocidade;
    }
    public function getPassageiro(){
        return $this->passageiros;
    }
    public function ligarVeiculo(){
        $this->ligado = true;
    }
    public function desligarVeiculo(){
        $this->ligado = false;
    }
    public function adicionarPassageiro($numero){
        if($numero > 0){
            $this->passageiros += $numero;
        }
    }
}

class Carro extends Veiculo {
    public function __construct($marca, $modelo, $cor) {
        parent::__construct($marca, $modelo, $cor);
    }
    public function adicionarPassageiro($numero){
        if($this->passageiros + $numero <= 5){ //verefica se carro tem 5 ou menos pessoa dentro
            $this->passageiros += $numero;
            parent::adicionarPassageiro($numero); //vai na classe veiculo e adiciona passageiro no metodo adicionar passageiro
        }else {
            echo "O número de passageiro não pode ser maior que 5 passageiros";
        }
    }
}

Class Fusca extends Carro {
    public function buzinar(){
        echo "Buzina do Fusca! <br>";
    }
}

Class Porsche extends Carro{
    public function acelerar($incremento){
        parent::acelerar($incremento *3); //polimorfismo
    }
}

Class Ferrari extends Carro{
    public function acelerar($incremento){
        parent::acelerar($incremento *5);
    }
}

class Motocicleta extends Veiculo{
    private $cilindrada;

    public function __construct($marca, $modelo, $cor, $cilindrada){
        parent::__construct($marca, $modelo, $cor);
        $this->cilindrada = $cilindrada;
    }
    public function getCilindrada(){
        return $this->cilindrada;
    }
    public function empinar(){
        if ($this->ligado === true){
            echo"A motocicleta está empinando!<br>";
        }else {
            echo"A motocicleta está desligada!<br>";
        }
    }
    public function adicionarPassageiro($numero){
        if($this->passageiros + $numero <= 2){ //verefica se carro tem 5 ou menos pessoa dentro
            $this->passageiros += $numero;
            parent::adicionarPassageiro($numero); //vai na classe veiculo e adiciona passageiro no metodo adicionar passageiro
        }else {
            echo "O número de passageiro não pode ser maior que 2 passageiros";
        }
    }
}

$fusca = new Fusca("Volskwagen","Fusca","Azul Calcinha", 0);
$porsche = new Porsche('Porsche', '911', 'Prata',500);
$ferrari = new Ferrari('Ferrari', "f40",'Vermelho',600);

$fusca->ligarVeiculo();
$fusca->acelerar(50);
echo "Velocidade do Fusca " . $fusca->getVelocidade() . "Km/h<br>";

//$porsche->acelerar();
//$ferrari->acelerar();

//echo "Velocidade do Fusca " . $fusca->getVelocidade() . '<br>';
//echo "Velocidade do Porsche " . $porsche->getVelocidade() . '<br>';

//$fusca->frear();
//$porsche->frear();
//$ferrari->frear();


?>