<?php

class Animal
{
    public $icon;
    public $image;

    function __construct(protected string $animal)
    {
        $this->animal = $animal;
        $this->icon = $this->setIcon($animal);
        //$this->image = $this->setImage($animal);
        $this->image = new SetImage($animal);
    }


    protected function setIcon($animal)
    {
        if ($animal === 'dog') {
            return '<i class="fa-solid fa-bone"></i>';
        } else {
            return '<i class="fa-solid fa-cat"></i>';
        }
    }

    /* protected function setImage($animal)
    {
        if ($animal === 'dog') {
            return 'https://picsum.photos/id/237/200/300';
        } else {
            return 'https://picsum.photos/id/40/200/300';
        }
    } */
}
