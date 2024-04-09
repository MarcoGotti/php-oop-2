<?php









require __DIR__ . '/database/db.php';
require_once __DIR__ . '/layouts/head.php';

var_dump($products);
//var_dump(Food::$type);
?>



<main>
    <div class="container my-3 ">
        <div class="row row-cols-4 row-gap-4">

            <?php foreach ($products as $item) : ?>
                if (get_class($item) === 'Toy'){
                echo $item->size
                }elseif(get_class($item) === 'Food'){
                echo $item->calories
                }
                <!-- <div class="col">
                    <div class="card position-relative hov">
                        <div class="position-absolute top-0 end-0 m-3 text-end">
                            <span class="bg-warning p-2 border border-1 rounded"><?= $item->icon ?></span>
                            <div class="mt-3 px-1 bg-success border border-1 rounded text-white"><?= get_class($item) ?></div>

                        </div>
                        <img class="card-img-top" src="<?= $item->image ?>" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title"><?= $item->title ?></h4>
                            <p class="card-text"><?= $item->price . ' £' ?></p>
                        </div>
                    </div>
                </div> -->

            <?php endforeach ?>

        </div>
    </div>
</main>

</body>

</html>

<!-- 

git remote add origin https://github.com/MarcoGotti/php-oop-2.git
git branch -M main
git push -u origin main
 -->