<?php

class Motor extends Transportation {
    public $sizeJok;
    public function __construct($name, $brand, $sizeJok)
    {
        parent::__construct($name, $brand);

        $this->sizeJok = $sizeJok;
    }

    public function run(){
        $str = "Transportasi dengan nama " . $this->name . " dengan merek " . $this->brand . " telah berjalan " . 
        "dengan ukuran jok " . $this->sizeJok;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->name . " telah berhenti ";
    }
}