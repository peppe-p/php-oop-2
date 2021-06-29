<?php

class Cards
{
    protected $code;
    protected $scad;
    protected $ccv;

    public function getCode()
    {
        return $this->code;
    }

    public function getScad()
    {
        return $this->scad;
    }

    public function getCCV()
    {
        return $this->ccv;
    }
}

$cards = [
    new Cards("000012349439", "01/25", "483"),
    new Cards("000012752476", "01/21", "542"),
    new Cards("000099343744", "01/22", "135"),
];