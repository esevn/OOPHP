<?php

class Person {
    public $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(){
        return "Halooo my name is " . $this->name . " My age " . $this->age . " old";
    }
}

class Student extends Person {
    public $grade;
    public function __construct($name, $age, $grade)
    {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }
    public function introduce(){
        $introduce = "Haloo my name is " . $this->name . " My age " . $this->age . " old, I'm a student in grade " .$this->grade ; 
        return $introduce;
    }
}

$person1 = new Student("Freya Jayawardana ", 18, "XII");
$person2 = new Person("Michelle Alexandra", 15);

echo $person1->introduce();
echo "<br>";
echo $person2->introduce();