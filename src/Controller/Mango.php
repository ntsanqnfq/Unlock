<?php
namespace app\Controller;

class Mango extends AbstractFruit implements InterfaceTaste {
    public function taste() {
        echo "Sweet";
    }
}


