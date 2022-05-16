<?php

namespace Sang\Unlock\Controller;

class WechatMessage implements MessageInterface
{

    protected string $flatform = '';

    /**
     * @param string $flatform
     */
    public function __construct(string $flatform = 'Wechat')
    {
        $this->flatform = $flatform;
    }

    /**
     * @param $text
     * @return string
     */
    public function send($text)
    {
        return "This message has content '" . $text . "' sent from " . $this->flatform;
    }
}
