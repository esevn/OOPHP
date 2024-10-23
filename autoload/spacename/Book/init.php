<?php

// require_once __DIR__ . '/Penerbit/Penerbit.php';
// require_once __DIR__ . '/Penerbit/Penulis.php';
// require_once __DIR__ . '/Penulis/Penerbit.php';
// require_once __DIR__ . '/Penulis/Penulis.php';

spl_autoload_register(function ($class){
    $class = explode('\\',$class);
    // ["Book", "Penerbit", "Penulis"]
    $class = end(($class));
    echo "Heyy, File yang dipanggil jenenge ";
    echo $class;
    require_once __DIR__ . '/Penerbit/' . $class . '.php';
    require_once __DIR__ . '/Penulis/' . $class . '.php';
});