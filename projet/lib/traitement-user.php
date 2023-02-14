<?php
session_start();
$erreurs = [];
require "base-de-donnee.php";
require "const.php";
require "lib/functions.php";
isLogged();

if(empty($_POST["nom"]) || empty($_POST["email"])){
    array_push($erreurs, "Veuillez compléter les champs");
}

if(empty($_POST["password"]) && !isset($_POST["id"])){
    array_push($erreurs, "Veuillez compléter le mot de passe");
}

if(strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255 ){
    array_push($erreurs, "Le champ nom doit contenir entre 4 et 255 lettres.");
}
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
    array_push($erreurs, "L'email n'est pas conforme.");
}

// le champ password doit contenir entre 4 et 255 caractères uniquement dans le formulaire d'ajout => INSERT INTO
if(strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255 && !isset($_POST["id"])){
    array_push($erreurs, "Le champ password doit contenir entre 4 et 255 lettres.");
}
// autre test => il ne faut pas qu'il y ait 2 utilisateurs qui disposent du même email
$sth = $connexion->prepare('SELECT * FROM users WHERE email = :email');
$sth->execute(["email" => $_POST["email"]]);
$resultat = $sth->fetch();

if(!empty($resultat) && $_POST["id"] != $resultat["id"]){
    array_push($erreurs, "Il existe déjà un profil avec cet email");
}

if (isset($_POST["actif"])){
    $_POST["actif"] = "1";
} else {
    $_POST["actif"] = "0";
}

// traitements
$_SESSION["form"] = $_POST; // permet de retourner les valeurs dans le formulaire

if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    // si le formulaire ne contient pas d'id
    if(!isset($_POST["id"])){
        // ajouter le profil en base de données
        $sth = $connexion->prepare('
    INSERT INTO users
    (nom, email, mot_de_passe, dt_creation, status)
    VALUES
    (:nom, :email, MD5(:password), NOW(), :actif)
    ');
    // MD5() fonction de hashage de MySQL => permet de hascher le mot de passe dans la base
    // ET la fonction ne dispose pas de fonction inverse (seulement dans le sens du cryptage)
    $sth->execute($_POST);
} elseif(isset($_POST["id"]) && empty($_POST["password"])){
    // UPDATE de tous les champs SAUF le mot de passe
    unset($_POST["password"]);
    $sth = $connexion->prepare('
    UPDATE users SET nom = :nom, email = :email, status = :actif WHERE id = :id');
    $sth->execute($_POST);
} else {
    // UPDATE de tous les champs AVEC le mot de passe
    $sth = $connexion->prepare('
    UPDATE users SET nom = :nom, email = :email, status = :actif, mot_de_passe = MD5(:password) WHERE id = :id ');
    $sth->execute($_POST);
}
    header("Location: " . WWW . "?page=user&partie=privee");
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: " . WWW . "?page=user&partie=privee&action=add");
}
exit;
