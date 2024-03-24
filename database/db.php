<?php

require_once __DIR__ . '/../app/models/Product.php';

$products =
    [
        new Product('cat', 'food', 10.45, 'Dryed for kitty'),
        new Product('dog', 'game', 14.99, 'Bone medium-hard'),
        new Product('dog', 'house', 24.99, 'House for outdoor'),
        new Product('cat', 'food', 10.50, 'Dryed daily for adult'),
        new Product('dog', 'accessories', 8.00, 'Leash'),
        new Product('cat', 'medicine', 29.99, 'Stomac-warms killer'),
        new Product('cat', 'game', 9.75, "Nails' post"),
        new Product('dog', 'beauty', 10.25, 'Brush'),
    ];

/* $dog = new Animal('dog');
var_dump($dog);
$product = new Product('cat', 'food', 10.45); */
var_dump($products);
