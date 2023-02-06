<?php
// http://localhost/php-initiation/blog/traitement/form-contact.php
session_start();

$erreurs = [];

// si un des deux champs est vide => ajouter uen erreur
if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs, "Veuillez compléter les deux champs");
}

// est-ce que l'email a une forme valide ?
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "L'email transmis n'est pas valide");
}

// le champ commentaire doit contenir un minimum de 5 caractères et maximum 1000 lettres

if(strlen($_POST["commentaire"]) <= 5 ||strlen($_POST["commentaire"]) > 1000){
    array_push($erreurs, "Le champ commentaire doit contenir entre 4 et 1000 caractères");
}

$_SESSION["form"] = $_POST; // permet de retourner les valeurs dans le formulaire

if(count($erreurs) === 0){ // afficher un message sous le formulaire
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "merci!!!"
    ];
    $_SESSION["form"] = []; // vider les réponses du formulaire
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
header("Location:http://localhost/php-initiation/blog/index.php?page=contact"); // rediriger vers le formulaire
exit;