<?php
require "09-data.php";

if(!empty($_GET) && isset($_GET["nom"])){ // est-ce que j'ai une partie variable dans l'url
    // isset => est-ce que la partie variable conyient un élément qui a l'index nommé "nom"
    $nom = $_GET["nom"];
    $course4 = [];
    foreach($villes as $ville){
        if($nom == $ville["nom"]){
            // array_push($course4, $ville);
            $course4[] = $ville; // autre manière d'ajouter un élément à un tableau
        }
    $villes = $course4;
    }
}
// var_dump($villes);
// https://materializecss.com => concurrent de Bootstrap (plus de choix de couleurs)/ mui
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09-exo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <ul>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php">all</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Paris">Paris</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Bordeaux">aucune ville</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <!-- 3 cas à gérer -->
            
            <?php if(count($villes) > 1) : ?>
                <h1>toutes les villes</h1>
                <?php foreach($villes as $ville) : ?>
                    <div class="col s3">
                        <p>nom : <?php echo $ville["nom"] ?></p>
                        <p>Nbre d'habitants : <?php echo $ville["nbHabitants"] ?></p>
                        <a href="http://localhost/php-initiation/jour4/09-exo.php?nom=<?php echo $ville["nom"] ?>" class="waves-effect waves-light btn">voir la ville</a>
                    </div>
                <?php endforeach ?>
            
            <?php elseif(count($villes) === 1) : ?>
                <h1>l'unique ville : Paris</h1>
                <p>Nom ville: <?php echo $villes[0]["nom"] ?></p>
                <p>Nombre d'habitants: <?php echo number_format($villes[0]["nbHabitants"], 0, ",", " ") ?></p>
            
            <?php else : ?>
                    <h1 class="white-text orange darken-5">Erreur 404 <small>aucune ville trouvée</small></h1>
            
            <?php endif ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>