<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <h1>Formulaire de connexion</h1>    
    <form action="traitement1.php" method="POST">
            <div class="input-field">
                <label for="nom">Votre nom</label>
                <input type="text" name="nom" id="nom" placeholder="saisir votre nom" required value="<?php echo !empty($_SESSION["form"]["nom"]) ? $_SESSION["form"]["nom"] : ""?>">
                
            </div>
            <div class="input-field">
                <label for="email">Votre email</label>
                <input type="email" name="email" id="email" placeholder="saisir votre email" required value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : ""?>">
                
            </div>
            <div class="input-field">
                <label for="password">Votre mot de passe</label>
                <input type="password" name="password" id="password" placeholder="saisir votre password" required value="<?php echo !empty($_SESSION["form"]["password"]) ? $_SESSION["form"]["password"] : ""?>">
                <button class="show-password">show</button>
                
            </div>
            <div class="input-field">
                <label for="role"></label>
                <select name="role" id="role" style="height:50px" required value="<?php echo !empty($_SESSION["form"]["role"]) ? $_SESSION["form"]["role"] : ""?>">
                    <option value="" disabled selected>Choisir un rôle</option>
                    <option value="redacteur" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "redacteur" ? "selected" : "" ?>>Rédacteur</option>
                    <option value="admin" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "admin" ? "selected" : "" ?>>Administrateur</option>
                    <option value="user" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "user" ? "selected" : "" ?>>Utilisateur</option>
                </select>
            </div>
            
            <div class="input-field">
                <label for="dt_creation"></label>
                <input type="date" name="dt_creation" id="dt_creation" required value="<?php echo !empty($_SESSION["form"]["dt_creation"]) ? $_SESSION["form"]["dt_creation"] : ''?>">
            </div>

            <div class="input-field">
                
                <span><label for="check">
                    <input name="check" id="check" type="checkbox" class="filled-in" style="position:relative;opacity:1"/>
                    Veuillez cocher si vous êtes actif
                </label></span>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
     <script>
        // préremplir le champ date de création à aujourd'hui
        
        const dt = new Date(); // recupérer la date du jour et stocker dans la variable dt
        const annee = dt.getFullYear();// extraire l'année de dt
        const mois = ("0" + (dt.getMonth() + 1)).slice(-2); // extraire le mois de dt + 1
        // dt.getMonth() => decembre => 11
        // dt.getMonth() + 1 => janvier => 12
        // "0" + dt.getMonth() + 1 => janvier => 012
        // ("0" + dt.getMonth() + 1).slice(-2) => 12
        const jour = ("0" + dt.getDate()).slice(-2); // extraire le jour de dt              
        document.querySelector('#dt_creation').value = `${annee}-${mois}-${jour}`;
        
        // lorsque l'on clique sur le bouton show => changer le type du champ password => text
        // lorsque je reclique sur le bouton show => changer le type du champ text => password
        document.querySelector(".show-password").addEventListener("click", function(e){
            e.preventDefault();
            const type = document.querySelector("#password").type;
            if(type === "password"){
                document.querySelector("#password").type = "text"
                e.target.innerText = "hide"
            } else {
                document.querySelector("#password").type = "password"
                e.target.innerText = "show"
            }
        })
    </script>
</body>
</html>