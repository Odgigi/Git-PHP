<?php
// condition et boucle
// très proche de javascript 

$a = 45 ;

if($a < 10){

}elseif($a < 50){ //la seule différence est l'absence d'espace entre else et if

}else {

}

// fonction
// créer des fonctions
function b(){
    // stocker des instructions
}

// exécuter les instructions stockées
function c(float $largeur, bool $test){
    return [];
}

// retourner une valeur qui peut être typée (faculattaif)
function d (): array{
    return [];
} // le return n'affiche rien à l'écran
// => ne pas confondre return et var_dump
echo "<p>écrire dans le navigateur</p>"; // == document.querySelector().innerHTML
var_dump($a); // écrire dans le navigateur valeur + type == console.log


// pour éviter le transtypage de PHP
// declare(strict_types=1) // ajouter cette ligne pour le typage STRICTEMENT appliqué "23" => 23

// tableau indexé
$etudiant = ["Pierre", "Paul", "Jacques", "Céline"];
echo "{$etudiant[3]} a découvert le PHP<br>";

// tableau associatif
$maison = [
    "adresse" => "75 rue de Lille",
    "enTravaux" => false,
    "prix" => 100_000
];
// La maison a coûté 100 000 euros.
echo "La maison a coûté {$maison["prix"]} euros<br>";

// http://localhost/php-initiation/jour3/01-rappels.php
// C:\xampp => xampp-control-exe