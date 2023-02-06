<?php
session_start();
// super-globale $_GET => récupérer des informations dans la barre d'adresse du site
// super-globale $_POST => récupérer des information saisies dans un formulaire

// $_SESSION => idéal Panier d'achat / gestion de l'authentification
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

            
</head>
<body>
    <div class="container">
    <h1>Formulaire de contact</h1>    
    <form action="01-traitement.php" method="POST">
        <!-- la balise from prend 2 attributs
        action = "01-traitement.php" => à quel fichier dans le serveur il faut envoyer les données ?
        method="POST" => comment les informations saisies dans le form vont être envoyées au seveur ? -->
            <div class="input-field"> <!-- effet de zoom et translate -->
                <input type="email" name="email" id="email" value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : ""?>">
                <label for="email">Votre email</label>
            </div>
            <div class="input-field">
                <textarea name="commentaire" id="commentaire" class="materialize-textarea" style="height:150px"><?php echo !empty($_SESSION["form"]["commentaire"]) ? $_SESSION["form"]["commentaire"] : ""?></textarea>
                <label for="commentaire">Laissez votre commentaire</label>
            </div>
            <div>
                <input type="submit" class="btn light-blue darken-2">
            </div>
        </form>
        <?php if(!empty($_SESSION["message"])) : ?>
          
            <?php if($_SESSION["message"]["alert"] === "success") : ?>
                <p class="white-text green" style="padding:5px 10px">
                    <?php echo $_SESSION["message"]["info"] ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?>
                <p class="white-text red" style="padding:5px 10px">
                    <?php foreach($_SESSION["message"]["info"] as $i) :?>
                        <?php echo $i ?> <br>
                    <?php endforeach ?>
                </p>

            <?php endif ?>
        <?php endif ?>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>