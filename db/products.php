<?php

/* Classe prodotto generale */

use Product as GlobalProduct;

class Product
{
    protected $name;
    protected $desc;
    protected $price;
    protected $qnt;


    function __construct($name, $desc, $price, $qnt)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->qnt = $qnt;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQnt()
    {
        return $this->qnt;
    }
}

$products = [
    new Product('Pc Lenovo', 'Lorem ipsum dolor sit amet.', 299.89, 139),
    new Product('Scrivania', 'Lorem ipsum dolor sit amet.', 580.99, 154),
    new Product('Pendrive Sony', 'Lorem ipsum dolor sit amet.', 19.00, 54),
    new Product('iPhone Apple', 'Lorem ipsum dolor sit amet.', 1299.99, 23),
    new Product('Tastiera Gaming', 'Lorem ipsum dolor sit amet.', 199.99, 3544)
];