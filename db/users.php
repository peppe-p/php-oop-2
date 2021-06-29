<?php

/* Classe utente generico */
class User
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $age;


    function __construct($name, $lastname, $email, $age)
    {
        $this->name = $name;
        $this->desc = $lastname;
        $this->price = $email;
        $this->qnt = $age;
    }
}

/* ############################### */
/* Classe Premium figlio di utente */
class Premium extends User
{
    protected $sconto;
    protected $points;

    function __construct($name, $lastname, $email, $age, $sconto, $points)
    {
        parent::__construct($name, $lastname, $email, $age);
        $this->sconto = $sconto;
        $this->points = $points;
    }
}