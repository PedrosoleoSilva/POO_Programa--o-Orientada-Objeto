<?Php 

//definição das variaveis
$lampada_estado = false;
$lampada_potencia = 60;

//função para ligar a lampada
function ligar_lampada() {
    global $lampada_estado;
    $lampada_estado = true;
}

//função para desligar a lampada
function deligar_lampada(){
    global $lampada_estado;
    $lampada_estado = false;
}

//função para aumentar s potencia da lampada
function aumentar_potencia(){
    global $lampada_potencia;
    $lampada_potencia += 20;
}

//função para diminuir a potencia da lampada
function diminuir_potencia(){
    global $lampada_potencia;
    $lampada_potencia -= 20;
}

//testando as funções
echo "Estado atual da lampada: " . ($lampada_estado ? "Ligada" : "Desligada") . "<br>";
echo "Potencia atual da lampada: " . $lampada_potencia . "watts<br>";

//chamar a função
ligar_lampada();
aumentar_potencia();

echo "Estado atual da lampada: " . ($lampada_estado ? "Ligada" : "Desligada") . "<br>";
echo "Potencial atual da lampada: " . $lampada_potencia . " whats<br>";

diminuir_potencia();
deligar_lampada();

echo "Estado atual da lampada: " . ($lampada_estado ? "Ligada" : "Desligada") . "<br>";
echo "Potencial atual da lampada: " . $lampada_potencia . " whats<br>";


?>