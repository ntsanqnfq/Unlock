<?php
class Fruit
{

    public $name;
    protected $color;
    private $weight;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}
