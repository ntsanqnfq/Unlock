<?php

namespace Sang\Unlock\Controller;

class FastSpeed extends AbstractShipmentDecorator
{
    protected $plus;

    public function __construct($plus)
    {
        $this->plus = $plus;
    }

    public function getPrice(): int
    {
        return 5000 + $this->plus->getPrice();
    }

    public function getService(): string
    {
        return " Fast speed " . $this->plus->getService();
    }
}
