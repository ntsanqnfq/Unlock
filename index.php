<?php
require 'vendor/autoload.php';

use Sang\Unlock\Controller\WechatMessage;

$wechat = new WechatMessage();
echo $wechat->send('I hate you');
