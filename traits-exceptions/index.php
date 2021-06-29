<?php

require('./traits.php');

class Product
{
    protected $name;
    protected $desc;
    protected $price;


    function __construct(string $name, string $desc, float $price)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }
}


class Car extends Product
{
    use Mark;

    function __construct($name, $desc, $price, $fuel)
    {
        parent::__construct($name, $desc, $price);
        $this->fuel = $fuel;
    }
}

class Moto extends Product
{
    use Mark;

    function __construct($name, $desc, $price, $fuel)
    {
        parent::__construct($name, $desc, $price);
        $this->fuel = $fuel;
    }
}