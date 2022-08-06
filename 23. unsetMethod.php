<?php

/* 
class student{ 

    public $course = "PHP";
    private $fname,$lname;

    public function getName($f,$l){

        $this->fname = $f;
        $this->lname = $l;
    }

}

$test = new student();
unset($test->course);
echo $test->course;
// private property can not be unset

$test->getName("YS","Priya");
unset($test->fname);
echo $test->fname; 

*/


    ### access private property using unset method ####
class student{ 

    public $course = "PHP";
    private $fname,$lname;

    public function getName($f,$l){

        $this->fname = $f;
        $this->lname = $l;
    }
 //private property can be accessed from public function
    public function __unset($property){
        unset($this->$property);
    }

}

$test = new student();
$test->getName("YS","Priya");
unset($test->fname);
print_r($test);