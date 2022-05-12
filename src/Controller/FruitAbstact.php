<?php

namespace Sang\Unlock\Controller;

class FruitAbstact
{

    protected $name;
    protected $color;
    protected $taste;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(string $name)
    {
        return $this->name;
    }

}

