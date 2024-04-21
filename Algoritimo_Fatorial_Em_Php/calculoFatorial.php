
<?php

class CalculaFatorial{

    private $fatorial, $resultado;

    public function __construct() { // Método construtor
        $this->fatorial = 0;  // Vai receber o número dado pelo usuário
        $this->resultado = 1; // Variável contadora que armazenará o resultado
    }
    
    public function getValor(){ // Captura o valor dado pelo usuário
        echo "Digite um valor para descobrir o fatorial do mesmo: ";
        $this->fatorial = (int) readline();
        return $this->fatorial;
        }
    
    public function verificaCondicoes(){ // Verifica a condição necessária para ser considerado fatorial
        if ($this->fatorial < 0){ // Se um valor negativo for inserido, vai aparecer essa mensagem
            echo "\nValor negativo, portanto invalido. \n";
        } else{
            $this->imprimeResultado(); // Se não, o código chama a implementação da lógica e resultado
        }
    }
    
    public function imprimeResultado(){ // Processa o valor inserido e entrega o resultado
        // Enquanto i <= fatorial ele será múltiplicado com a variável "Resultado"
        // EXEMPLO: 5! = 1*1 = 1*2 = 2*3 = 6*4 = 24 * 5 = 120
        for ($i = 1; $i <= $this->fatorial; $i++){
            $this->resultado *= $i;
        }
        echo "O resultado de $this->fatorial em fatorial e: $this->resultado\n "; // Resultado final
    }
}
    
    
$calculadora = new CalculaFatorial(); // Objeto 1
$calculadora->getValor(); // Capturando valor do usuário
$calculadora->verificaCondicoes(); // Verificando se o valor inserido é válido


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
