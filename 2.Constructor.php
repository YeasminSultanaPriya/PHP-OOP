<?php
// don't have to call constructor function
// It is called automatically  when an object is created

class person{
    public $name;
    public $age;

    function __construct($name = "No name", $age = 0){  //default value
        // assign constructor variable into class variable
        $this->name = $name;
        $this->age = $age;
    } 

    function show(){
        echo $this->name . "-" . $this->age . "<br>";
    }
}
$p1 = new person();
$p2 = new person("Yeasmin",24);
$p3 = new person("Airin",21);

$p1->show();
$p2->show();
$p3->show();
?>