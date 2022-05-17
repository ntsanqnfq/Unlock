<?php

namespace Sang\Unlock\Controller;

class SlowSpeed extends AbstractShipmentDecorator
{
    protected $plus;

    public function __construct($plus)
    {
        $this->plus = $plus;
    }

    public function getPrice(): int
    {
        return 4000 + $this->plus->getPrice();
    }

    public function getService(): string
    {
        return " Slow speed " . $this->plus->getService();
    }
}
