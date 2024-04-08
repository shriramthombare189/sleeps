<?php
class Calculator {
    private $num1;
    private $num2;
    
public function __construct($n1, $n2) {
        $this->num1 = $n1;
        $this->num2 = $n2;
    }
    
    // Method to perform subtraction
    public function add() {
        return $this->num1 + $this->num2;
    }
    
    public function subtract() {
        return $this->num1 - $this->num2;
    }
    
    // Method to perform multiplication
    public function multiply() {
        return $this->num1 * $this->num2;
    }
    
    // Method to perform division
    public function divide() {
        // Check if the second number is not zero to avoid division by zero
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Cannot divide by zero!";
        }
    }
}
$cal = new Calculator(3,2);
echo $cal->add()."<br>";
echo $cal->subtract()."<br>";
echo $cal->multiply()."<br>";
echo $cal->divide();
?>