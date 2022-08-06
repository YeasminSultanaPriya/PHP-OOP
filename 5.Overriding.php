
<?php

######### Method overriding ########
//when a method in the derived class is created which is the same as that of the method in the base class
//Both of these methods have the same name and same number of arguments
class base{
    public $name = "parent class";

    public function calc($a,$b){
        return $a * $b;
    }
}

class derived extends base{
    public $name = "child class";

    public function calc($a,$b){
        return $a + $b;
    }
}

$obj = new derived();

echo $obj->name;
echo $obj->calc(5,10);

?>