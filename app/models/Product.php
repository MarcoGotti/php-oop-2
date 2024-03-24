<?php

include_once __DIR__ . '/Animal.php';
include_once __DIR__ . '/SetImage.php';

class Product extends Animal
{
    public function __construct($animal, public string $type, public float $price, public string $title)
    {
        parent::__construct($animal);
        $this->type = $type;
        $this->price = $price;
        $this->title = $title;
    }
}
