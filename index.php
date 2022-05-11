<?php
require "vendor/autoload.php";

use app\Controller\Chilli;
use app\Controller\Mango;

$mango = new Mango();
$mango->taste();

echo "\n";

$chilli = new Chilli();
$chilli->taste();
