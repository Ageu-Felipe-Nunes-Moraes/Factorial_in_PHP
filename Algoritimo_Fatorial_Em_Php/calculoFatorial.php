
<?php

class CalculaFatorial{

    private $fatorial, $resultado;

    public function __construct() {
        $this->fatorial = 0;
        $this->resultado = 1;
    }
    
    public function getValor(){
        echo "Digite um valor para descobrir o fatorial do mesmo: ";
        $this->fatorial = (int) readline();
        return $this->fatorial;
        }
    
    public function verificaCondicoes(){
        if ($this->fatorial < 0){
            echo "\nValor negativo, portanto invalido. \n";
        } else{
            $this->imprimeResultado();
        }
    }
    
    public function imprimeResultado(){
        for ($i = 1; $i <= $this->fatorial; $i++){
            $this->resultado *= $i;
        }
        echo "O resultado de $this->fatorial em fatorial e: $this->resultado\n ";
    }
};
    
    
$calculadora = new CalculaFatorial();
$calculadora->getValor();
$calculadora->verificaCondicoes();


//Forma simplificada do código
/* 
$fatorial = 1;
echo "Digite um valor para descobrir o fatorial do mesmo: ";

$resultado = readline();

if ($resultado > 0){
    for ($i = 1; $i <= $resultado; $i++){
        $fatorial *= $i;
    }
    echo "O fatorial de $resultado é: $fatorial \n";
} else{
    echo "O valor é inválido";
}
*/

?>
