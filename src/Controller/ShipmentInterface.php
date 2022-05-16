<?php

namespace Sang\Unlock\Controller;

interface ShipmentInterface
{
    public function getPrice(): int;

    public function getService(): string;
}
