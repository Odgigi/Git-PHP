<?php
require "08-data.php";

if(!empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];

    $course3 = [];
    foreach($produits as $produit){
        if($min <= ($produit["prix"]) && $max >= ($produit["prix"])){
            array_push($course3, $produit);
        }
    }
    $produits = $course3;
}
var_dump($produits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-exo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <section class="row">
            
            <?php if(count($produits) > 1) : ?>
                <h1>plusieurs produits</h1>
                <?php foreach($produits as $produit) : ?>
                    <p>nom : <?php echo $produit["nom"] ?></p>
                    <p>prix : <?php echo $produit["prix"] ?></p>
                <?php endforeach ?>
            
            <?php elseif(count($produits) === 1) : ?>
                <h1>un seul produit</h1>
                <p><?php echo $produits[0]["nom"] ?></p>
                <p><?php echo $produits[0]["prix"] ?></p>
            
            <?php else : ?>
                    <h1>aucun produit</h1>
            
            <?php endif ?>
        </section>
    </div>
</body>
</html>
