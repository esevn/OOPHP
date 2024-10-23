<?php

class Plane extends Transportation {
    public $ketinggian;
    public function __construct($name, $brand, $ketinggian)
    {
        parent::__construct($name, $brand);

        $this->$ketinggian = $ketinggian;
    }
    public function run(){
        $str = "Transportasi dengan nama " . $this->name . " dengan merek " . $this->brand . " telah berjalan " . 
        "dengan ketinggian " . $this->ketinggian;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->name . " telah berhenti ";
    }
}