<?php

require_once __DIR__ . '/DB/Connection.php';
require_once __DIR__ . '/Model/Model.php';


// $connection = new Connection();
// echo $connection;
$model = new Model();
$data_mobil = ['name' => 'Mclaren', 'brand' => 'Luar', 'color' => 'Gold'];
// $model->create($data_mobil, "cars");

$dataMobil = $model->find(2, $data_mobil, 'cars');
// var_dump( $dataMobil = $model->index('cars'));


