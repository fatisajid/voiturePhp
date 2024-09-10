<?php
    include_once(__DIR__ . '/partials/head.php');
    require_once(__DIR__ . "/data.php");
    var_dump($cars);
    if($cars){
        foreach($cars as $car){
            $nameCar = $car['name'];
            echo "<p>$nameCar</p>";
        }

        foreach($cars as $car){
            ?>
                <div class="card" style="width: 18rem;">
                <img src="/public/img/<?= $car['picture'] ?>" class="card-img-top" alt="image d'une voiture <?= $car['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $car['name'] ?></h5>
                    <a href="/car.php?id=<?= $car['id'] ?>" class="btn btn-primary">Voir plus</a>
                </div>
                </div>
            <?php
        }

    }else{
        echo "<h1>Il n'y a pas de voiture !</h1>";
    }
?>
<?php 
    include_once(__DIR__ . "/partials/footer.php") 
?>