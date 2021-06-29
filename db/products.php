<?php

/* Classe prodotto generale */
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
}