<?php

require_once __DIR__ . '/../app/models/Product.php';
require_once __DIR__ . '/../app/models/Food.php';
require_once __DIR__ . '/../app/models/Toy.php';
require_once __DIR__ . '/../app/models/House.php';

$products =
    [
        new Food('cat', 'Crunch&Fat', 'Healthy Pet', 25.55, 85, '10 kg', '250 C/kg', 'Adult - over 12 months', 'dry medium-hard'),
        new Toy('dog', 'Bown to byte', 'Happy Cat', 12.45, 104, '1,5 kg', 'very hard', '15 X 3cm'),
        new House('dog', 'Doghouse-everest', 'SweetDreams', 43.80, 58, '15 kg', '100 X 60 X 60cm', 'medium-size'),
    ];

//var_dump($products);
