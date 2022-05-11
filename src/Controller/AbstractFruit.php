<?php
namespace app\Controller;

class AbstractFruit
{

    private $name;
    protected $color;
    private $taste;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

}

