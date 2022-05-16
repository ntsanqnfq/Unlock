<?php
require 'vendor/autoload.php';
use Sang\Unlock\Controller\DatabaseConnector;

$dbConnect1 = DatabaseConnector::getInstance();
$dbConnect2 = DatabaseConnector::getInstance();
$dbConnect1->getDatabase();

