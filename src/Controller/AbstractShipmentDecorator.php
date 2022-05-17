<?php

namespace Sang\Unlock\Controller;

abstract class AbstractShipmentDecorator implements ShipmentInterface
{
    protected $plus;

    public function __construct($plus)
    {
        $this->$plus = $plus;
    }

    abstract public function getPrice(): int;

    abstract public function getService(): string;
}
