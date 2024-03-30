<?php

class Food extends Product
{
    public static string $type = 'Food';
    public string $icon;

    function  __construct(
        $animal,
        $name,
        $brand,
        $price,
        $imageNumb,
        public string $weight,
        public string $calories,
        public string $ageRange,
        public string $texture,
    ) {
        parent::__construct($animal, $name, $brand, $price, $imageNumb,);
        $this->icon = Product::setIcon($animal, self::$type);
    }
}
