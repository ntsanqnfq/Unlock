<?php
require 'vendor/autoload.php';

$zalo = new \Sang\Unlock\Controller\WechatMessage();
$zalo->send('I hate you');

