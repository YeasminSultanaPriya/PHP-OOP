<?php

//base class
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : ". $this->name . "<br>";
        echo "Employee Age : ". $this->age . "<br>";
        echo "Employee Salary : ". $this->salary . "<br>";
    }
}

//Derived clas

class manager extends employee{
    public $tavaling_allownce = 1000;
    public $phone = 300;
    public $totalSalary;
    function info(){
        $this->totalsalary = $this->salary + $this->tavaling_allownce + $this->phone; 

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name : ". $this->name . "<br>";
        echo "Employee Age : ". $this->age . "<br>";
        echo "Employee Salary : ". $this->totalsalary . "<br>";
    }

}
$obj = new manager("YS", 24, 20000);
$obj1 = new employee("AS", 21, 2000);

$obj->info();
$obj1->info();

?>
