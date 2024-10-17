<?php

class Kitab {
    public static $name;
    public static $count = 1;

    public static function getName(){
        return "Kitab ini " . self::$name . " telah dibaca sebanyak " . self::$count++ . " kali.";
    }

    public static function setName($name){
        self::$name = $name;
    }
}

Kitab::$name = "Arabiyah";
echo Kitab::getName();
echo "<br>";
Kitab::$name = "Sahih al-Bukhari";
echo Kitab::getName();
echo "<br>";
Kitab::$name = "Bulugh al-Maram";
echo Kitab::getName();
echo "<br>";
Kitab::$name = "Riyadhus Shalihin";
echo Kitab::getName();
echo "<br>";
Kitab::$name = "Sahih Muslim";
echo Kitab::getName();

echo "<hr>";

// non static

class Buku {
    public $nama;
    public $hitung = 1  ;

    public function get_name(){
        return "Ini buku " . $this->nama . " dan telah dibaca sebanyak " . $this->hitung++ . " orang.";
    }

    public function set_name($nama){
        $this->nama = $nama;
    }
}

$namaBuku = new Buku();
$namaBuku->set_name("Al-Mutawa");
echo $namaBuku->get_name();
echo "<br>";
$namaBuku = new Buku();
$namaBuku->set_name("Tafsir Ibnu Katsir");
echo $namaBuku->get_name();
echo "<br>";
$namaBuku = new Buku();
$namaBuku->set_name("Ihya Ulumuddin");
echo $namaBuku->get_name();
echo "<br>";
$namaBuku = new Buku();
$namaBuku->set_name("Fathul Bari");
echo $namaBuku->get_name();
echo "<br>";
$namaBuku = new Buku();
$namaBuku->set_name("Fiqh al-Islami wa Adillatuhu");
echo $namaBuku->get_name();
echo "<br>";

