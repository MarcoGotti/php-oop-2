<?php

require_once __DIR__ . '/../app/models/Product.php';
require_once __DIR__ . '/../app/models/Food.php';
require_once __DIR__ . '/../app/models/Toy.php';
require_once __DIR__ . '/../app/models/House.php';



$crunchFat = new Food('cat', 'Crunch&Fat', 'Healthy Pet',  85, '10 kg', '250 C/kg', 'Adult - over 12 months', 'dry medium-hard');
$crunchFat->setPrice(6.99);
$bownByte = new Toy('dog', 'Bown to byte', 'Happy Cat', 104, '1,5 kg', 'very hard', '15 X 3cm');
$bownByte->setPrice(50);
$everest = new House('dog', 'Doghouse-everest', 'SweetDreams', 58, '20 kg', '100 X 60 X 60cm', 'medium-size');
$everest->setPrice(100);
$wetSlim = new Food('dog', 'Wet&Slim', 'Healthy Pet', 85, '15 kg', '150 C/kg', 'Puppy - under 12 months', 'umid tender');
$wetSlim->setPrice(81);
$crunchSlim = new Food('cat', 'Crunch&Slim', 'Tiger Home', 85, '8 kg', '200 C/kg', 'Adult - over 12 months', 'dry medium');
$crunchSlim->setPrice(99);
$pettyCure = new Toy('cat', 'Petty-cure', 'Happy Cat', 104, '2 kg', 'very resistant', '50 X 10cm');
$pettyCure->setPrice(99.99);
$bahamas = new House('dog', 'Doghouse-bahamas', 'Home Sweet Dog', 58, '15 kg', '130 X 80 X 60cm', 'big-size');
$bahamas->setPrice(25);

$products =
    [
        $crunchFat,
        $bownByte,
        $everest,
        $wetSlim,
        $crunchSlim,
        $pettyCure,
        $bahamas
    ];

//var_dump($products);

/* $stuff = new Product();
$stuff->setPrice(57); */
