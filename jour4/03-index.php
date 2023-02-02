<?php
require "03-data.php";
require "03-fonction.php";

// var_dump($_GET);
// si $_GET n'est pas vide
// alors au lieu d'avoir toutes les valeurs du tableau
// $article = []
if(!empty($_GET)){
    // empty fonction native qui retourne true si vide []
    // et retourne false si le tableau n'est pas []
    $id = $_GET["id"]; // récupérer le numéro de l'article

    // $articles = array_filter($articles, function($item){
    //     global $id;
    //     return $item["id"] === $id;
    // });
    
    $resultat = [];
    foreach($articles as $a){
        if($a["id"] === $id){ // si un raticle dans le fichier 03-data.php contient le m^me id que celui dans l'url
            array_push($resultat, $a); // rajouter un élément à un tableau
        }
    }
    $articles = $resultat;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <section class="row mt-5">
            <?php if(count($articles) == 1): ?>
                <!-- un seul article -->
                <article class='col-12'>
                    <h1>Page single</h1>
                    <h2><?php echo $articles[0]["titre"] ?></h2>
                    <img src='<?php echo $articles[0]["img"] ?> ' alt="">
                    <p><?php echo $articles[0]["contenu"] ?></p>
                    <a href="http://localhost/php-initiation/jour4/03-index.php?id=3">Retour à la page d'accueil</a>
                </article>
                <!-- page d'accueil -->
            <?php elseif (count($articles) > 1) : ?>
                <?php foreach($articles as $a) : ?>
                    <div class="col-3 mb-3">
                        <?php echo genererArticle($a) ?>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <h1>Page d'erreur 404</h1>
                <!-- page erreur -->
                <p>Erreur 404 L'article demandé n'existe pas...</p>
            <?php endif ?>
        </section>
    </div>
</body>
</html>