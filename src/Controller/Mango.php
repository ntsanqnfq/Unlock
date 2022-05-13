<?php

namespace Sang\Unlock\Controller;

use Sang\Unlock\Controller\TasteInterface;
use Sang\Unlock\Controller\FruitAbstact;

class Mango extends FruitAbstact implements TasteInterface
{
    public function taste()
    {
        return "Sweet";
    }

    /**
     * @param $number
     * @param $weight
     * @return float|int
     */
    public function weightScale(int $number, int $weight)
    {
        $total = $number * $weight;
        return $total;
    }
}


