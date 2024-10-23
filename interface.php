<?php

abstract class Transportation {
    private $name;
    private $brand;
    

    public function get_name(){
        return $this->name;
    }

    public function get_brand(){
        return $this->brand;
    }

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

interface TransportationInterface {
    public function fly();
}

class Car extends Transportation implements TransportationInterface {
    public $jmlPintu;
    public function __construct($name, $brand, $jmlPintu)
    {
        parent::__construct($name, $brand);

        $this->jmlPintu = $jmlPintu;
    }
    public function run(){
        $str = "Transportasi dengan nama " . $this->get_name() . " dengan merek " . $this->get_brand() . " telah berjalan " . 
        "dan memiliki pintu" . $this->jmlPintu;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->get_name() . " telah berhenti ";
    }
    public function fly()
    {
        return "Transportasi dengan nama " . $this->get_name() . " bisa terbang ";
    }
}

class Motor extends Transportation {
    public $sizeJok;
    public function __construct($name, $brand, $sizeJok)
    {
        parent::__construct($name, $brand);

        $this->sizeJok = $sizeJok;
    }

    public function run(){
        $str = "Transportasi dengan nama " . $this->get_name() . " dengan merek " . $this->get_brand() . " telah berjalan " . 
        "dengan ukuran jok " . $this->sizeJok;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->name . " telah berhenti ";
    }
}

class Plane extends Transportation {
    public $ketinggian;
    public function __construct($name, $brand, $ketinggian)
    {
        parent::__construct($name, $brand);

        $this->$ketinggian = $ketinggian;
    }
    public function run(){
        $str = "Transportasi dengan nama " . $this->get_name() . " dengan merek " . $this->get_brand() . " telah berjalan " . 
        "dengan ketinggian " . $this->ketinggian;
 
        return $str;
    }
    public function stop(){
        return "transportasi dengan nama " . $this->get_name() . " telah berhenti ";
    }
}

$motor = new Motor("Beat", "honda", "50cm");
$mobil = new Car("Jeep", "jeprii", 2);
$pesawat = new Plane("Super Air Jet", "Indonesia", "40.000 mdpl");


$motor->sizeJok = "100cm";
echo $motor->run();
echo "<br>";
echo $mobil->run();
echo "<br>";
echo $mobil->fly();
echo "<br>";
echo $pesawat->run();
echo "<br>";
echo $pesawat->stop();
echo "<br>";
echo $mobil->stop();
echo "<hr>";


