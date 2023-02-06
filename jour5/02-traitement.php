<?php
session_start(); // à placer tout en haut du fichier => 1ere ligne

// récupérer l'email $_POST["email"];
// récupérer le commentaire $_POST["commentaire"];
$erreurs = [];
// vérifier que les champs ne sont pas vides
if(empty($_POST["email"]) || empty($_POST["menu-langue"])){
    array_push($erreurs, "Attention, tous les champs doivent être remplis.");
}


// vérifier si l'email est conforme
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "L'email saisi n'est pas valide");
} // filter_var mail valide => retourne true
// !filter_var => l'inverse


$listeLangues = ["français", "anglais", "arabe"];
// vérifie que la langue choisie fait bien parties de celles figurant au tableau
if(!in_array($_POST["menu-langue"], $listeLangues)){
    array_push($erreurs, "La langue de la newsletter doit être choisie");
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
        "info" => "Merci !"
    ];
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
header("Location: 02-exo.php");
exit;