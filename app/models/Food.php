<?php

class Food extends Product
{
    public string $icon;

    function  __construct(
        $animal,
        $name,
        $brand,
        $imageNumb,
        public string $weight, //se è integer
        public string $calories,
        public string $ageRange, //se è string
        public string $texture, //soft medium hard
    ) {
        parent::__construct($animal, $name, $brand, $imageNumb,);
        $this->icon = Product::setIcon($animal, get_class($this));
    }
}
