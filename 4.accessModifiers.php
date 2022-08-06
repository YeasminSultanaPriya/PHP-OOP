<?php

// public-> have access in class itself, outside the class, derived class
// protected-> have access in class itself and derived class but not outside the class
// private-> have access in class itself only

######### Public #########

/* class base{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your name : " . $this->name . "<br>";
    }
}

$obj = new base("YS");
$obj->name = "Priya"; // can override

$obj->show();
 */



######### Protected variable#########

/* class base{
    protected $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your name : " . $this->name . "<br>";
    }
    
}

$obj = new base("YS");
//$obj->name = "Priya"; // can not override protected variable's value

$obj->show(); */

######### Protected function #########

/* class base{
    protected $name;
    public function __construct($n){
        $this->name = $n;
    }
// protected function can be access from derived class
    protected function show(){
        echo "Your name : " . $this->name . "<br>";
    }    
}
class derived extends base{
    public function get(){
        echo "Your name : " . $this->name . "<br>";
    }
}
$obj = new derived("YS");
$obj->get(); */

######### Private  variable#########

class base{
    private $name;

    public function __construct($n){
        $this->name = $n;
    }
    //we can access private data only using public function 
    private function get(){ 
        echo $this->name;
    }
}

$obj = new base("YS");
$obj->get();

?>