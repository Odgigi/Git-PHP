<?php
require "09-data.php";

if(!empty($_GET)){
    
    $nom = $_GET["nom"];
    $course4 = [];
    foreach($villes as $ville){
        if($nom == $ville["nom"]){
            array_push($course4, $ville);
        }
    }
    $villes = $course4;
}
// var_dump($villes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09-exo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <section class="row">
            
            <?php if(count($villes) > 1) : ?>
                <h1>toutes les villes</h1>
                <?php foreach($villes as $ville) : ?>
                    <p>nom : <?php echo $ville["nom"] ?></p>
                    <p>Nbre d'habitants : <?php echo $ville["nbHabitants"] ?></p>
                <?php endforeach ?>
            
            <?php elseif(count($villes) === 1) : ?>
                <h1>l'unique ville : Paris</h1>
                <p><?php echo $villes[0]["nom"] ?></p>
                <p><?php echo $villes[0]["nbHabitants"] ?></p>
            
            <?php else : ?>
                    <h1>aucune ville</h1>
            
            <?php endif ?>
        </section>
    </div>
</body>
</html>