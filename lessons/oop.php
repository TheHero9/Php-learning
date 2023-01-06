<?php

//Class
class User{

    //Properties
    public $name;
    public $number;

    //Method 1
    function set_name($name){
        $this->name=$name;
    }

    //Method2
    function getName(){
        return $this->name;
    }


    //Constructor
    public function __construct($name, $number){
        $this->name=$name;
        $this->number=$number;
    }
}

//Create user1
// $user1= new User();

//Set name
// $user1->set_name('Dimi');
// $user1->name='Brad';

//Create user2 with constructor
$user2= new User('Dimi Vlassis', 9);

//Call function
echo $user2->getName();


//Inheritance
class Employee extends User{
    public $age;

    public function __construct($name, $number, $age){
        parent::__construct($name, $number);
        $this->age=$age;
    }

    public function get_age(){
        return $this->age;
    }
}


//Create employee
$employee = new Employee('Employee', '1', '20');
//Get his age
echo $employee->get_age();



var_dump($employee);
?>
