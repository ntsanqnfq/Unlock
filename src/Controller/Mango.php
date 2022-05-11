<?php
namespace app\Controller;

class Mango extends AbstractFruit implements InterfaceTaste {
    public function taste() {
        echo "Sweet";
    }
    public function weightScale($number, $weight) {
        $total = $number + $weight;
        return  $total;
    }
}


