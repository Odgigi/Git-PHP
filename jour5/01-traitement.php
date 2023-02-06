<?php
session_start(); // à placer tout en haut du fichier => 1ere ligne
var_dump($_POST);

// récupérer l'email $_POST["email"];
// récupérer le commentaire $_POST["commentaire"];
$erreurs = [];
// vérifier que les champs sont bien remplis
if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs, "les champs email et commentaire ne peuvent être vides");
}


// vérifier si l'email est conforme
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "L'email saisi n'est pas valide");
}


// vérifier que le commentaire contient au moins 4 lettres et un maximum de 1000 lettres
if(strlen($_POST["commentaire"]) <= 4 || strlen($_POST["commentaire"]) >= 1000){
    array_push($erreurs, "Le champ commentaire doit contenir au minimum 4 lettres et au maximum 1000 lettres");
}

$_SESSION["form"] = $_POST;
// stocker les valeurs saisies dans le formulaire pour les stocker dans la session

// si toutes les vérifications sont vérifiées a contrario
if(count($erreurs) === 0){
    // traitement
    // enregistrer en base de données
    // envoyer un email
    // créer un devis
    // créer une session...
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "Merci pour votre message"
    ];
    header("Location: 00-post.php");
    exit;
} else {
    
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];

    header("Location: 00-post.php");
    exit;
}
