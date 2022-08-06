<?php

// access member variable and method without object
// the class will be static if all the member variables and methods are static

/* class base{
    public static $name = "YS";

    public static function show(){
        echo self::$name; // satic uses 'self' instead of 'this' keyword
    }
}

echo base::$name; //print using member variable
base::show(); //print with function calling */


######### with constructor #######

class base{
    public static $name = "YS";

    public static function show(){
        echo self::$name; // satic uses scope resolution except this keyword
    }

    public function __construct(){
        self::show();
    }
}

$obj = new base();
$obj->show();


?>