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