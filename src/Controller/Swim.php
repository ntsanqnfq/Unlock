<?php

namespace Sang\Unlock\Controller;

class Swim
{
    public function doSwim(): string
    {
        $hands = new Hands();
        $legs = new Legs();
        $lungs = new Lungs();
        return $hands->do().' + '. $legs->do().' + '. $lungs->do();
    }
}
