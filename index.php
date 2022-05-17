<?php
require 'vendor/autoload.php';

use Sang\Unlock\Controller\FastSpeed;
use Sang\Unlock\Controller\SlowSpeed;
use Sang\Unlock\Controller\Shipment;

$shipment = new SlowSpeed(new Shipment());

echo $shipment->getPrice();

echo $shipment->getService();
