<?php
namespace Sang\Unlock\Controller;

class WechatMessage implements MessageInterface{

    protected string $flatform = '';

    public function __construct(string $flatform = 'Wechat'){
        $this->flatform = $flatform;
    }
    public function send($text)
    {
        echo "This message has content '".$text."' sent from ".$this->flatform;
    }
}
