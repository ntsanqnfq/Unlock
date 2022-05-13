<?php
require "vendor/autoload.php";

use Sang\Unlock\Controller\Chilli;
use Sang\Unlock\Controller\Mango;

$mango = new Mango();

$taste = $mango->taste();
echo $taste;
echo "\n";

$chilli = new Chilli();
$taste = $chilli->taste();
echo $taste;
