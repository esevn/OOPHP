<?php

abstract class Transportation {
    public $name;
    public $brand;
    

    public function set_name($name){
        return $this->name = $name;
    }

    protected function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand =$brand;
    }

    abstract public function stop();
}
