<?php

class Product {
    public $nameProduct;
    public $priceProduct;

    function setProduct($name, $price){
        $this->nameProduct = $name;
        $this->priceProduct = $price;
    }

    function getProduct(){
        return "name: ".$this->nameProduct.", price: ".$this->priceProduct;
    }}

    $pulpen = new Product();
    $buku = new Product();

    $pulpen->setProduct("pulpen", 3000);
    $buku->setProduct("buku", 3500);

    // echo $pulpen->getProduct();
    // echo "<br>";
    // echo $buku->getProduct();
    // echo "<br>";

    // TEAM RRQ MPL SEASON 14 id
    echo "<h1>TEAM RRQ MPL SEASON 14 id</h1>";
    // echo "<br>";

    class RRQ {
        public $nameRRQ;
        public $role;
    
        function setRRQ($name, $role){
            $this->nameRRQ = $name;
            $this->role = $role;
        }
    
        function getRRQ(){
            return "name: ".$this->nameRRQ.", role: ".$this->role;
        }}
    
        $skylar = new RRQ();
        $sutsujin = new RRQ();
        $idok = new RRQ();
        $rinz = new RRQ();
        $dyrenn = new RRQ();
    
        $skylar->setRRQ("Skylar", "GoldLane");
        $sutsujin->setRRQ("Sutsujin", "Assasin");
        $idok->setRRQ("Idok", "Tank");
        $rinz->setRRQ("Rinz", "MidLane");
        $dyrenn->setRRQ("Dyrenn", "ExpLane");

    
        echo $skylar->getRRQ();
        echo "<br>";
        echo $sutsujin->getRRQ();
        echo "<br>";
        echo $idok->getRRQ();
        echo "<br>";
        echo $rinz->getRRQ();
        echo "<br>";
        echo $dyrenn->getRRQ();
        echo "<br>";

