<?php
    include_once(__DIR__ . '/partials/head.php');
    require_once(__DIR__ . "/data.php");
    require_once(__DIR__ . "/function.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $car = findCarById($cars, $id);

        if ($car !== null) {
            ?>
                <h1><?= $car['name'] ?></h1>
                <p>Prix : <?= $car['price'] ?>€</p>
        <?php
        
        } else {
            echo "<p>Voiture non trouvée</p>";
        }

    } else {
        header('Location: /404.php');
        exit;
    }
?>
    
<?php 
    include_once(__DIR__ . "/partials/footer.php") 
?>