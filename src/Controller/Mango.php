<?php

namespace app\Controller;
use app\Controller\InterfaceTaste;
use app\Controller\AbstractFruit;

class Mango extends AbstractFruit implements InterfaceTaste
{
    public function taste()
    {
        echo "Sweet";
    }

    /**
     * @param $number
     * @param $weight
     * @return float|int
     */
    public function weightScale($number, $weight)
    {
        $total = $number * $weight;
        return $total;
    }
}


