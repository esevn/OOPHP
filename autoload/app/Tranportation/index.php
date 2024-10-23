<?php

require_once __DIR__ . '/../Interface/CarInterface.php';
require_once __DIR__ . '/../Interface/TransportationInterface.php';
spl_autoload_register(function ($class) {
    echo "haloo, File yang dipanggil bernama ";
    echo $class;
    echo "<br>";
    require_once __DIR__ . '/' . $class . '.php';
});


$motor = new Motor("Beat", "honda", "50cm");
$mobil = new Car("Jeep", "jeprii", 2);
$pesawat = new Plane("Super Air Jet", "Indonesia", "40.000 mdpl");

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
    echo "<hr>";
?>