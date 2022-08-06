<?php

class calculation{
    public $a;
    public $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$obj = new calculation();
$obj->a = 20;
$obj->b = 10;

$obj1 = new calculation();
$obj1->a = 20;
$obj1->b = 10;

echo "Sum value of the first object: " .  $obj->sum() . "\n";
echo "Sub value of the second object: " .  $obj1->sub() . "\n";

?>