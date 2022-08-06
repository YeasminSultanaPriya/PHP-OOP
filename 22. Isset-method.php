<?php
// Check whether a variable is empty(return 0 or 1)
// you can access a private property using __isset() method

class student{
    public $course;
    private $first_name;
    private $last_name;
    private $detail = ['name'=>'Test name', 'age'=> '20'];
    
    public function info($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    /* public function __isset($property){ //access private property
        echo isset($this->$property);
    } */
    public function __isset($name){ //access private property
        echo isset($this->detail[$name]);
    }

}
$test = new student();
//$test->course = "PHP";
//echo isset($test->course) . "<br>";
$test->info("YS","Priya");
//echo isset($test->first_name);
echo isset($test->name);

