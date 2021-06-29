<?php

require('./traits.php');

class Product
{
    public $name;
    public $desc;
    public $price;


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

    public function getPrice(int $price)
    {
        if (!is_int($price)) {
            throw new Exception('Is not a number', "0022");
        }
        return "Il prezzo è di " . $this->price . "€";
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

$cars = [
    new Car("BMW", "Lorem ipsum diet.", 3484, "Benzina"),
    new Car("Mercedes", "Lorem ipsum diet.", "3232", "Diesel"),
    new Car("Audi", "Lorem ipsum diet.", 6584, "Benzina"),
];

$moto = [
    new Moto("BMW", "Lorem ipsum.", 813, "Benzina"),
    new Moto("Mercedes", "Lorem ipsum.", "313", "Elettrico"),
    new Moto("Audi", "Lorem ipsum.", 913, "Elettrico"),

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>

<body>
    <?php foreach ($cars as $car) : ?>
    <h3><?= $car->name ?></h3>
    <h4><?= $car->desc ?></h4>
    <h4>
        <?php
            try {
                echo $car->getPrice($car->price);
            } catch (Exception $e) {
                echo 'Errore: ' . $e->getMessage() . ' Codice Errore: ' . $e->getCode();
            }
            ?>
    </h4>
    <?php endforeach ?>
</body>

</html>