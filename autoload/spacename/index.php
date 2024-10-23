<?php

require_once __DIR__ . '/Book/init.php';

use \Book\Penerbit\Penerbit;
use \Book\Penerbit\Penulis;
use \Book\Penulis\Penerbit as penerbitNulis;
use \Book\Penulis\Penulis as PenulisBiasa;

new Penerbit();
echo "<br>";
new penerbitNulis();
echo "<br>";
new Penulis();
echo "<br>";
new PenulisBiasa;
echo "<br>";