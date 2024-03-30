<?php


class Toy extends Product
{
    public static string $type = 'Toy';
    public string $icon;

    function  __construct(
        $animal,
        $name,
        $brand,
        $price,
        $imageNumb,
        public string $weight,
        public string $hardness,
        public string $size,
    ) {
        parent::__construct($animal, $name, $brand, $price, $imageNumb);
        $this->icon = Product::setIcon($animal, self::$type);
    }
}
