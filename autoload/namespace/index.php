<?php

require_once __DIR__ . '/App/init.php';

use \App\Product\Product;
use \App\Product\User as UserProduct;
use \App\User\User;
use \App\User\Product as ProductBiasa;

new Product();
echo "<br>";
new User();
echo "<br>";
new UserProduct();
echo "<br>";
new ProductBiasa;
echo "<br>";