<?php

class Manga {
    public  $judul,
            $penulis,
            $penerbit,
            $chapter;



public function manga(){
    return  "Manga " .$this->judul . 
            " ditulis oleh " .$this->penulis . 
            " manga ini punya " .$this->chapter . "chapter";
}

}

$jjk = new Manga();
$jjk->judul = "Jujutsu Kaisen";
$jjk->penulis = "Gege Akutami";
$jjk->penerbit = "Shueisha";
$jjk->chapter = "271";

echo "Manga :  $jjk->judul, $jjk->penulis";
echo "<br>";
echo $jjk->manga();


