<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-exo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         
</head>
<body>
    <div class="container">
    <h1>Formulaire de newsletter</h1>    
    <form action="02-traitement.php" method="POST">
            <div class="input-field"> <!-- effet de zoom et translate -->
                <input type="email" name="email" id="email" value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : ""?>">
                <label for="email">Votre email</label>
            </div>
            <div class="input-field">
                <select name="menu-langue" id="menu-langue" style="height:50px" value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : ""?>">
                    <option value="" disabled selected>Choisir</option>
                    <option value="français" <?php echo !empty($_SESSION["form"]["menu-langue"]) && $_SESSION["form"]["menu-langue"] === "français" ? "selected" : "" ?>>Français</option>
                    <option value="anglais" <?php echo !empty($_SESSION["form"]["menu-langue"]) && $_SESSION["form"]["menu-langue"] === "anglais" ? "selected" : "" ?>>Anglais</option>
                    <option value="arabe" <?php echo !empty($_SESSION["form"]["menu-langue"]) && $_SESSION["form"]["menu-langue"] === "arabe" ? "selected" : "" ?>>Arabe</option>
                </select>
                <label for="menu-langue">Choisissez votre langue</label>
            </div>
            <div>
                <input type="submit" class="btn orange accent-2">
            </div>
        </form>
        <?php if(!empty($_SESSION["message"])) : ?>
          
            <?php if($_SESSION["message"]["alert"] === "success") : ?>
                <p class="white-text teal accent-4" style="padding:5px 10px">
                    <?php echo $_SESSION["message"]["info"] ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?>
                <p class="white-text pink" style="padding:5px 10px">
                    <?php foreach($_SESSION["message"]["info"] as $i) :?>
                        <?php echo $i ?> <br>
                    <?php endforeach ?>
                </p>

            <?php endif ?>
        <?php endif ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems); // enlever options pour ne pas être gêné
    // ou ajouter class "browser-default" au select
  });</script>
</body>
</html>

