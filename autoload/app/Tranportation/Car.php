<?php

class Car extends Transportation implements TransportationInterface {
    public $jmlPintu;
    public function __construct($name, $brand, $jmlPintu)
    {
        parent::__construct($name, $brand);

        $this->jmlPintu = $jmlPintu;
    }
    public function run(){
        $str = "Transportasi dengan nama " . $this->name . " dengan merek " . $this->brand . " telah berjalan " . 
        "dan memiliki pintu" . $this->jmlPintu;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->name . " telah berhenti ";
    }
    public function fly()
    {
        return "Transportasi dengan nama " . $this->name . " bisa terbang ";
    }
}