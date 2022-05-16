<?php
require 'vendor/autoload.php';

$wechat = new \Sang\Unlock\Controller\WechatMessage();
echo $wechat->send('I hate you');
