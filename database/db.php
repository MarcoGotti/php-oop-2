<?php

require_once __DIR__ . '/../app/models/Product.php';
require_once __DIR__ . '/../app/models/Food.php';
require_once __DIR__ . '/../app/models/Toy.php';
require_once __DIR__ . '/../app/models/House.php';

$products =
    [
        new Food('cat', 'Crunch&Fat', 'Healthy Pet', 25.55, 85, '10 kg', '250 C/kg', 'Adult - over 12 months', 'dry medium-hard'),
        new Toy('dog', 'Bown to byte', 'Happy Cat', 12.45, 104, '1,5 kg', 'very hard', '15 X 3cm'),
        new House('dog', 'Doghouse-everest', 'SweetDreams', 75.80, 58, '20 kg', '100 X 60 X 60cm', 'medium-size'),
        new Food('dog', 'Wet&Slim', 'Healthy Pet', 40.55, 85, '15 kg', '150 C/kg', 'Puppy - under 12 months', 'umid tender'),
        new Food('cat', 'Crunch&Slim', 'Tiger Home', 30.55, 85, '8 kg', '200 C/kg', 'Adult - over 12 months', 'dry medium'),
        new Toy('cat', 'Petty-cure', 'Happy Cat', 18.99, 104, '2 kg', 'very resistant', '50 X 10cm'),
        new House('dog', 'Doghouse-bahamas', 'Home Sweet Dog', 89.99, 58, '15 kg', '130 X 80 X 60cm', 'big-size'),
    ];

//var_dump($products);
