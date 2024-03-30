<?php


class House extends Product
{
    public static string $type = 'House';
    public string $icon;

    function  __construct(
        $animal,
        $name,
        $brand,
        $price,
        $imageNumb,
        public string $weight,
        public string $sizes,
        public string $animal_size,
    ) {
        parent::__construct($animal, $name, $brand, $price, $imageNumb);
        $this->icon = Product::setIcon($animal, self::$type);
    }
}
