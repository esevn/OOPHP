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


$kucing = new Animal("kucing", "meowwwing", "betina");


echo $kucing-> makeSound();
