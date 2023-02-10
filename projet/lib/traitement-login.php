<?php
session_start();

$erreurs = [];

// si un des deux champs est vide => ajouter une erreur
if(empty($_POST["login"]) || empty($_POST["password"])){
    array_push($erreurs, "Veuillez compléter ces deux champs");
}

$_SESSION["form"] = $_POST; // permet de retourner les valeurs dans le formulaire

if(count($erreurs) === 0){
    header("Location: http://localhost/php-initiation/projet/index.php?page=accueil&partie=privee");
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/php-initiation/projet/index.php?page=login");
}
exit;
