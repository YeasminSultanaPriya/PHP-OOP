<?php

//It's a magic function that helps you include / require files using class name.

/* require "Autoload/first.php";
require "Autoload/second.php"; */

function __spl_autoload_register($class){
    require "Autoload/" . $class . ".php";
}

$test = new second();

?>