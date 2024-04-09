<?php

class Product
{
    public string $image;
    private float $price;

    function __construct(
        public string $animal,
        public string $name,
        public string $brand,
        public int $imageNumb,
    ) {
        $this->image = "https://picsum.photos/id/$imageNumb/200/300";
    }

    /*  public function setPrice($value){
        if ($value >0).......
        $this->price = $value;
    } */

    public function setPrice($value)
    {
        if ($value > 80) {
            $this->price = $value * 0.8;
        } elseif ($value > 0) {
            $this->price = $value;
        }
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
