<?php

class Animal
{
    protected $icon;
    protected $image;

    function __construct(protected string $animal)
    {
        $this->animal = $animal;
        $this->icon = $this->setIcon($animal);
        $this->image = $this->setImage($animal);
        //$this->icon = '<i class="fa-solid fa-$this->setIcon($animal)"></i>';
    }


    protected function setIcon($animal)
    {
        if ($animal === 'dog') {
            return '<i class="fa-solid fa-bone"></i>';
        } else {
            return '<i class="fa-solid fa-cat"></i>';
        }
    }

    protected function setImage($animal)
    {
        if ($animal === 'dog') {
            return 'https://picsum.photos/id/237/200/300';
        } else {
            return 'https://picsum.photos/id/40/200/300';
        }
    }
}

class Product extends Animal
{
    public function __construct($animal, protected string $type, protected float $price)
    {
        parent::__construct($animal);
        $this->type = $type;
        $this->price = $price;
    }
}

$products =
    [
        new Product('cat', 'food', 10.45),
        new Product('dog', 'game', 14.99),
        new Product('dog', 'house', 24.99),
        new Product('cat', 'food', 10.50),
        new Product('dog', 'accessories', 8.00),
        new Product('cat', 'medicine', 29.99),
        new Product('cat', 'game', 9.75),
        new Product('dog', 'beauty', 10.25),
    ];

/* $dog = new Animal('dog');
var_dump($dog);
$product = new Product('cat', 'food', 10.45); */
var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <main>
        <div class="container">
            <div class="row row-cols-4">



                <div class="col">
                    <div class="card"></div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>