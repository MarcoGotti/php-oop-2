<?php

class SetImage
{
    public $image;

    function __construct($animal)
    {
        if ($animal === 'dog') {
            $this->image = 'https://picsum.photos/id/237/200/300';
        } else {
            $this->image = 'https://picsum.photos/id/40/200/300';
        }
    }
}
