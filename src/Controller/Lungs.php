<?php

namespace Sang\Unlock\Controller;

class Lungs
{
    public function do(): string
    {
        $oxygen = new Oxygen();
        return 'breathing '.$oxygen->getOxygen();
    }
}
