<?php

namespace app\Controller;

class FruitAbstact
{

    private $name;
    private $color;
    private $taste;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(string $name)
    {
        return $this->name;
    }

}

