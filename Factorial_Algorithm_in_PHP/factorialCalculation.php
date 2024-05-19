
<?php

class FactorialCalculate{

    private $factorial, $result;

    public function __construct() { // Construct method
        $this->factorial = 0;  // Will receive number entered by the user
        $this->result = 1; // Counter that will store the result
    }
    
    public function getValue(){ // to get value entered by the user
        echo "Digite um valor para descobrir o fatorial do mesmo: ";
        $this->factorial = (int) readline();
        return $this->factorial;
        }
    
    public function checksConditions(){ // Checks the necessary conditions to have a factorial
        if ($this->factorial < 0){ // If you enter negative value, it will show this message
            echo "\nValor negativo, portanto invalido. \n";
        } else{
            $this->printResult(); // Otherwise, the code will call the logic implementation and the result
        }
    }
    
    public function printResult(){ // Processes entered value and delivers the result
        // While i <= factorial, it will be multiplied by the "Result" variable
        // EXEMPLE: 5! = 1*1 = 1*2 = 2*3 = 6*4 = 24 * 5 = 120
        for ($i = 1; $i <= $this->factorial; $i++){
            $this->result *= $i;
        }
        echo "O resultado de $this->factorial em fatorial e: $this->result\n "; // Final result
    }
}
    
    
$calculator = new FactorialCalculate(); // Object 1
$calculator->getValue(); // To get user value
$calculator->checksConditions(); // Checks if the entered value is valid


//Simple form of the code
/* 
$factorial = 1;
echo "Digite um valor para descobrir o fatorial do mesmo: ";

$result = readline();

if ($result > 0){
    for ($i = 1; $i <= $result; $i++){
        $factorial *= $i;
    }
    echo "O fatorial de $result é: $factorial \n";
} else{
    echo "O valor é inválido";
}
*/

?>
