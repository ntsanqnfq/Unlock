<?php

namespace app\Controller;

use app\Controller\TasteInterface;
use app\Controller\FruitAbstact;

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


