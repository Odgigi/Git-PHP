<?php
session_start();
$erreurs = [];
require "base-de-donnee.php";
require "const.php";
require "lib/functions.php";
isLogged();

if(empty($_POST["titre"]) || empty($_POST["slug"]) ||empty($_POST["contenu"]) || empty($_POST["image"]) || empty($_POST["auteur"])){
    array_push($erreurs, "Veuillez remplir tous les champs");
}
// vérifier que titre/ slug/ auteur contiennent entre 4 et 255 caractères => pls pareils donc faire une boucle
$champs = ["titre", "slug", "auteur"];
foreach($champs as $c){
    if(strlen($_POST[$c]) <= 4 || strlen($_POST[$c]) >= 255){
    array_push($erreurs, "Le champ {$c} doit contenir entre 4 et 255 caractères.");
    }
}
// if(strlen($_POST["titre"]) <= 4 || strlen($_POST["titre"]) >= 255){
//     array_push($erreurs, "Le champ titre doit contenir entre 4 et 255 caractères.");
// }
// if(strlen($_POST["slug"]) <= 4 || strlen($_POST["slug"]) >= 255){
//     array_push($erreurs, "Le champ slug doit contenir entre 4 et 255 caractères.");
// }
// if(strlen($_POST["auteur"]) <= 4 || strlen($_POST["auteur"]) >= 255){
//     array_push($erreurs, "Le champ auteur doit contenir entre 4 et 255 caractères.");
// }    
if(strlen($_POST["contenu"]) <= 4 || strlen($_POST["contenu"]) >= 65000){
    array_push($erreurs, "Le champ contenu ne doit pas contenir plus de 65 000 caractères.");
}
// vérifier que l'url de l'image est correcte
if(!filter_var($_POST["image"], FILTER_VALIDATE_URL) ){
    array_push($erreurs, "L'url n'est pas valide.");
}

// traitements
$_SESSION["form"] = $_POST;

if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    // si le formulaire ne contient pas déjà une id
    if(!isset($_POST["id"])){
        $sth = $connexion->prepare('
        INSERT INTO pages
        (titre, slug, contenu, image, auteur, dt_creation)
        VALUES
        (:titre, :slug, :contenu, :image,:auteur, NOW()) ');
        $sth->execute($_POST);
        $_SESSION["message"] = [
            "alert" => "success",
            "info" => "La page a été insérée en base de données."
        ];
    } else {
    $sth = $connexion->prepare('
    UPDATE pages SET titre = :titre, slug = :slug, contenu = :contenu, image = :image, auteur = :auteur WHERE id = :id');
    $sth->execute($_POST);
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "La page a été mise à jour en base de données."
    ];
    }
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: " . WWW . "?page=page&partie=privee");
}
exit;