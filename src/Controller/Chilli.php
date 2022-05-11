<?php
namespace app\Controller;

class Chilli extends AbstractFruit implements InterfaceTaste {
    public function taste() {
        echo "Spicy";
    }
}

