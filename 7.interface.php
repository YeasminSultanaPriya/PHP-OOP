<?php

//access multiple classes from a single class (write, class = interface and extends = implements)
// works same as abstract class
//can't make object of interface
//can't include member variables or properties
// can declare method but can't define or implement
// don't have to write access modifier before method name

interface parent1{
    function calc($a,$b);
}

interface parent2{
    function sub($c,$d);
}
// implement interfaces in derived class
class childClass implements parent1, parent2{
    public function calc($a,$b){
        echo $a + $b;
    }
    public function sub($c,$d){
        echo $c - $d;
    }

}
$obj = new childClass();
$obj->calc(23,34);
echo "<br>";
$obj->sub(53,34);

?>