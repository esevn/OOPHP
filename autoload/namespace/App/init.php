<?php

// require_once __DIR__ . '/User/User.php';
// require_once __DIR__ . '/Product/User.php';
// require_once __DIR__ . '/Product/Product.php';

spl_autoload_register(function  ( $class ) {
    $class = explode('\\',$class);
    // ["App", "Product", "User"]
    $class = end(($class));
    echo "Haloo, File yang dipanggil bernama ";
    echo $class;
    require_once __DIR__ . '/User/' . $class . '.php';
    require_once __DIR__ . '/Product/' . $class . '.php';
});