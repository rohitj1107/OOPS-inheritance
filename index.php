<?php

// Parent class
class employee{
    public $name , $age , $salary;
    function __construct($n , $a , $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo '<h1>Employee Profile</h1>';

        echo 'Emp name : ' . $this->name.'<br>';
        echo 'Emp age : ' . $this->age.'<br>';
        echo 'Emp salary : ' . $this->salary.'<br>';
    }
}

// child class inheritance using extends key word

class manager extends employee{
    public $ta = 5000;
    public $phone = 300;
    public $total;
    function info(){
        $this->total = $this->ta + $this->phone + $this->salary;

        echo '<h1> Manager Profile </h1>';
        echo 'Emp name : ' . $this->name.'<br>';
        echo 'Emp age : ' . $this->age.'<br>';
        echo 'Emp salary : ' . $this->total.'<br>';
    }
}

// object create parent class
$obj1 = new employee('Ram',20,2000);
echo $obj1->info();

// object create child class
$obj2 = new manager('Yogesh',25,10000);
echo $obj2->info();
?>
