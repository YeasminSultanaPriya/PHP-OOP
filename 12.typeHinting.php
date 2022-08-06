<?php

//type hinting or type declaration
//types(int,float,string,bool,array,class/interface Name, object)
//data types can be passed as the arguments of the PHP functions

######## type int ####
/* function get(int $a){
    echo $a + 1;
}

get(5); */

######## type array #### 

/* function get(array $name){
    //$name = ["Tom","Krish","Jerry"];
    foreach($name as $name ){
        echo $name . "<br>";
    }
}
$name = ["Tom","Krish","Jerry"];
get($name); */

######## type class #### 
/* class hello{
    public function sayhello(){
        echo "hello everyone";
    }
}
class hi{
    public function sayhi(){
        echo "hi everyone";
    }
}
function wow(hello $c){ // print only when function is in class hello
    $c->sayhello();
}
$test = new hello();
wow($test); */


class school{
    public function getNames(student $names){ //object must be from student class 
        foreach ($names->Names() as $name){
            echo $name . "<br>";
        }
    }
}

class student{
    public function Names(){
        return ["Tom","Krish","Jerry"];
    }
}

$stu = new student();
$sch = new school();
$sch->getNames($stu);