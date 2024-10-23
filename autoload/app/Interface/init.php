<?php 

spl_autoload_register(function ($class) {
    echo "haloo, File yang dipanggil bernama ";
    echo $class;
    echo "<br>";
    require_once __DIR__ . '/' . $class . '.php';
});