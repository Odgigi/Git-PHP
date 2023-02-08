<?php
session_start();

$erreurs = [];
// vérifier que les champs ne sont pas vides
if(empty($_POST["nom"]) || empty($_POST["email"]) || empty($_POST["password"])|| empty($_POST["role"]) || empty($_POST["dt_creation"])) {
    array_push($erreurs, "Veuillez compléter tous les champs.");
}

if(
    strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255){
    array_push($erreurs, "Le nom doit contenir entre 4 et 255 caractères.");
}
// vérifier si l'email est conforme
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "L'email saisi n'est pas valide.");
} // filter_var mail valide => retourne true !filter_var => l'inverse

if(
    strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255){
    array_push($erreurs, "Le password doit contenir entre 4 et 255 caractères.");
}

$listeRoles = ["redacteur", "admin", "user"];
// vérifie que le rôle choisi fait bien partie de ceux figurant au tableau
if(!in_array($_POST["role"], $listeRoles)){
    array_push($erreurs, "Vous ne pouvez être que user, rédacteur ou admin.");
} 

if(
    !strtotime($_POST["dt_creation"])){
        array_push($erreurs, "La date de création n'est pas conforme.");
}

if(isset($_POST["check"]) && $_POST["check"] !== "on"){
    array_push($erreurs, "La valeur saisie n'est pas correcte.");
}

var_dump($_POST); // est-ce que j'ai bien tous les champs du formulaire remplis ?
var_dump($erreurs); // est-ce qu'un des tests précédents est vrai ?
exit;

if(isset($_POST["check"])){
        $_POST["check"] = "1";
    } else {
        $_POST["check"] = "0";
    }
// stocker les valeurs saisies dans le formulaire pour les stocker dans la session
$_SESSION["form"] = $_POST;

// si toutes les vérifications sont vérifiées a contrario
if(count($erreurs) === 0){
    // traitement
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "Merci vous êtes bien enregistré.e !"
    ];
    // se connecter à la base de données
    $connexion = new PDO('sqlite:./base1.db');
    // créer la table users si nécessaire
    $connexion->query('
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nom  VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(255),
        role VARCHAR(9),
        dt_creation DATE,
        `check` BOOLEAN
        )
    ');

    
    // attention check est un mot-clé php => entourer de backticks dans les requêtes sql
    // INSERER les données
    $sth = $connexion->prepare('
    INSERT INTO users
    (nom, email, password, role, dt_creation, `check`)
    VALUES
    (:nom, :email, :password, :role, :dt_creation, :check)
    ');
    $sth->execute($_POST);
    $_SESSION["form"] = [];
} else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
header("Location: http://localhost/php-initiation/gestion-utilisateur/form1.php");
exit;