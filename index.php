<?php

require './db/cards.php';
require './db/products.php';
require './db/users.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    section {
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: center;
        padding: 100px 0;
    }

    .card {
        padding: 20px;
        background-color: red;
        color: white;
        margin: 20px;
    }

    h1 {
        text-align: center;
    }
    </style>
    <title>OOP 2</title>
</head>

<body>
    <h1>I nostri prodotti</h1>
    <section>
        <?php foreach ($products as $product) : ?>
        <div class="card">
            <h2><?= $product->getName() ?></h2>
            <p><?= $product->getDesc() ?></p>
            <h3><?= $product->getPrice() ?></h3>
            <h3><?= $product->getQnt() ?></h3>
        </div>
        <?php endforeach ?>
    </section>
</body>

</html>