<?php

class Transportation {
    public $name;
    protected $brand;
    // public $jmlPintu;
    // public $sizeJok;
    // public $ketinggian;


    protected function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand =$brand;
        // $this->jmlPintu = $jmlPintu;
        // $this->sizeJok = $sizeJok;
        // $this->ketinggian = $ketinggian;
    }

    public function stop(){
        return "transportasi dengan nama " . $this->name . " telah berhenti ";
    }
}

class Car extends Transportation {
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
}

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
}

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
}

$motor = new Motor("Beat", "honda", "50cm");
$mobil = new Car("Jeep", "jeprii", 2);
$pesawat = new Plane("Super Air Jet", "Indonesia", "40.000 mdpl");

$motor->sizeJok = "100cm";
echo $motor->run();
echo "<br>";
echo $mobil->run();
echo "<br>";
echo $pesawat->run();
echo "<br>";
echo $pesawat->stop();
echo "<br>";

