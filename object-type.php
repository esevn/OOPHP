<?php

class Animal {
    public $name;
    public $sound;
    public $species;

    public function __construct($name, $sound, $species)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->species = $species;
    }

    public function makeSound(){
        return "Hewan " .$this->name . " bersuara " .$this->sound;
    }
}

class Food {
    public function feed(Animal $hewan){
        return $hewan->name . "sudah makan" . " bersuarra " . $hewan->sound;
    }
}

$kucing = new Animal("Kucing", "Meoww", "mamalia");
$monyet = new Animal("monyet", "uakk", "jantan");


$food1 = new Food();
$food2 = new Food();


echo $kucing-> makeSound();
echo "<br>";
echo $food1->feed($kucing);
echo "<br>";
echo $food2->feed($monyet);

