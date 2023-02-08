<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

    <section class="container">
        <h1>Ajouter un nouvel article</h1>
        <form action="traitement.php" method="POST">
            <div class="input-field">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" required value="<?php echo !empty($_SESSION["form"]["titre"]) ? $_SESSION["form"]["titre"] : ''?>">
            </div>
            <div class="input-field">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="5" class="materialise-textarea" required value="<?php echo !empty($_SESSION["form"]["contenu"]) ? $_SESSION["form"]["contenu"] : ''?>"></textarea>
            </div>
            <div class="input-field">
                <label for="auteur">Auteur</label>
                <input type="text" name="auteur" id="auteur" required value="<?php echo !empty($_SESSION["form"]["auteur"]) ? $_SESSION["form"]["auteur"] : ''?>">
            </div>
            <div class="input-field">
                <label for="dt_creation"></label>
                <input type="date" name="dt_creation" id="dt_creation" required value="<?php echo !empty($_SESSION["form"]["dt_creation"]) ? $_SESSION["form"]["dt_creation"] : ''?>">
            </div>

            <input type="submit" class="pink">

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
    </section>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>