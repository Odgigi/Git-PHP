<?php
session_start();

$erreurs = [];
// vérifier que les champs sont bien remplis
if(
    empty($_POST["titre"]) ||
    empty($_POST["contenu"]) ||
    empty($_POST["auteur"]) ||
    empty($_POST["dt_creation"])
){
    array_push($erreurs, "Tous les champs doivent être remplis");
    // vérifier le nombre de caractères du champ titre
} if(
    strlen($_POST["titre"]) <= 4 || strlen($_POST["titre"]) >= 255){
    array_push($erreurs, "le champ titre doit contenir entre 4 et 255 caractères");
    // vérifier que le nombre de caractères du champ contenu
} if(
    strlen($_POST["contenu"]) <= 4 || strlen($_POST["contenu"]) >= 1000){
    array_push($erreurs, "le champ contenu doit contenir entre 4 et 1000 caractères");
    // vérifier le nombre de caractères du champ auteur
} if(
    strlen($_POST["auteur"]) <= 4 || strlen($_POST["auteur"]) >= 255){
    array_push($erreurs, "le champ auteur doit contenir entre 4 et 255 caractères");
    // tester que le champ date a bien transmis une date au format AAAA-MM-JJ
} if(
    !strtotime($_POST["dt_creation"])){
        array_push($erreurs, "le champ date de création n'est pas conforme");
}

// stocker les valeurs saisies dans le formulaire pour les réafficger en cas d'erreur
$_SESSION["form"] = $_POST;

// si tout est bon => pas d'erreur
if(count($erreurs) === 0){
    // dire merci
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "merci l'article a bien été enregistré"
    ];
    // INSERER les informations en base de données
    $connexion = new PDO('sqlite:./base.db');
    $connexion->query('
        CREATE TABLE IF NOT EXISTS articles (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre VARCHAR(255),
            contenu TEXT,
            auteur VARCHAR(255),
            dt_creation DATE
            )
    ');
    $sth = $connexion->prepare('
    INSERT INTO articles
    (titre, contenu, auteur, dt_creation)
    VALUES
    (:titre, :contenu, :auteur, :dt_creation)
    '); // requête préparée => requête dans laquelle on prévient PHP qu'il y a des champs sous la fome :col
    $sth->execute($_POST);
    // vider la session ["form"]
    $_SESSION["form"] = [];
} else {
    // dire les erreurs
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
    // redirection vers le formulaire
    header("Location: http://localhost/php-initiation/crud/form.php");
    exit;

