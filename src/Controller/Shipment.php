<?php

namespace Sang\Unlock\Controller;

class Shipment implements ShipmentInterface
{


    public function getPrice(): int
    {
        return 40000;
    }

    public function getService(): string
    {
        return "shipment";
    }
}
