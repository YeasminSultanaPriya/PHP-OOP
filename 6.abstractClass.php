<?php

//secured class and can't make object
// must be declare an abstruct functon inside an abstract class
// you have to implement abstract function in derived class not inside abstract function

abstract class parentClass{
    public $name;
    abstract protected function calc($a,$b); // only declare
}

class childClass extends parentClass{
    public function calc($c,$d){ //same num of arguments as adstract method 
        echo "Hello";
        echo $this->name = "YS";
        echo $c + $d;
    }
}

$test = new childClass();
$test->calc(10,20);
?>