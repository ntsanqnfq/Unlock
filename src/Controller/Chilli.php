<?php

namespace app\Controller;

class Chilli extends FruitAbstact implements TasteInterface
{
    public function taste()
    {
        return "Spicy";
    }
}

