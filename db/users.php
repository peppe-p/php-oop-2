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


$users = [
    new User("Giacomo", "Petrucci", "giacomop@gmail.com", 43),
    new User("Angela", "Bella", "angelina@gmail.com", 63),
    new User("Alex", "Benviento", "pviento@gmail.com", 25),
];

$premium = [
    new Premium("Nando", "Gonzales", "nanndo9@gmail.com", 31, 30, 278),
    new Premium("Luna", "Certo", "lunetta23@gmail.com", 21, 30, 178),
];