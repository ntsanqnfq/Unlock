<?php
namespace Sang\Unlock\Controller;

class ZaloMessage implements MessageInterface{

    protected string $flatform = '';

    /**
     * @param string $flatform
     */
    public function __construct(string $flatform = 'Zalo'){
        $this->flatform = $flatform;
    }

    /**
     * @param $text
     * @return string
     */
    public function send($text)
    {
        return "This message has content '".$text."' sent from ".$this->flatform;
    }
}
