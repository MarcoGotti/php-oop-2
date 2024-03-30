<?php

class Product
{
    public $image;

    function __construct(
        public string $animal,
        public string $name,
        public string $brand,
        public float $price,
        public int $imageNumb,
    ) {
        $this->image = "https://picsum.photos/id/$imageNumb/200/300";
    }

    public static function setIcon($animal, $type)
    {
        if ($type === 'House' || $animal === 'dog') {
            return '<i class="fa-solid fa-bone"></i>';
        } else {
            return '<i class="fa-solid fa-cat"></i>';
        }
    }
};
