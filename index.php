<?php
require 'vendor/autoload.php';
use Sang\Unlock\Controller\DatabaseConnector;

$dbConnect1 = DatabaseConnector::getInstance();
$dbConnect2 = DatabaseConnector::getInstance();

if($dbConnect2===$dbConnect1){
    echo 'the same';
}
