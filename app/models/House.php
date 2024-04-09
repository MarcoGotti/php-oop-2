<?php


class House extends Product
{

    public string $icon;

    function  __construct(
        $animal,
        $name,
        $brand,
        $imageNumb,
        public string $weight, //se è integer (vedi Food)
        public string $sizes,
        public string $animal_size,
    ) {
        parent::__construct($animal, $name, $brand, $imageNumb);
        $this->icon = Product::setIcon($animal, get_class($this));
    }
}
