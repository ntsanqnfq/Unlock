<?php
require "vendor/autoload.php";

use app\Controller\Chilli;
use app\Controller\Mango;

$mango = new Mango();

$taste = $mango->taste();
echo $taste;
echo "\n";

$chilli = new Chilli();
$taste = $chilli->taste();
echo $taste;
