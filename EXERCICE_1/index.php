<?php
class MyCalculator {
private $_val1, $_val2;
public function __construct( $val1, $val2 ) {
$this->_val1 = $val1;
$this->_val2 = $val2;
}
public function add() {
return $this->_val1 + $this->_val2;
}
public function subtract() {
return $this->_val1 - $this->_val2;
}
public function multiply() {
return $this->_val1 * $this->_val2;
}
public function divide() {
return $this->_val1 / $this->_val2;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add().PHP_EOL;  
echo $mycalc-> multiply().PHP_EOL; 
echo $mycalc-> subtract().PHP_EOL;  
echo $mycalc-> divide().PHP_EOL;  
?>
