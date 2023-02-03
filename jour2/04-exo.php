<?php
// créer un nouveau fichier php contenant une variable $ville
// initialiser la variable $ville = "Marseille"

// si $ville a pour valeur Paris 
// alors afficher dans le navigateur vous habitez à Paris

// si $ville a pour valeur Boulogne ou Clamart ou Montrouge 
// alors afficher dans le navigateur vous habitez dans le 92

// si $ville a pour valeur Saint-Denis ou Aubervilliers ou Pantin
//  alors afficher dans le navigateur vous habitez dans le 93

// sinon
// afficher dans le navigateur vous habitez hors d'Ile de France

$ville = "Saint-Denis";
if($ville == "Paris"){
    echo("Vous habitez à Paris");
} elseif ($ville == "Boulogne" || $ville == "Clamart" || $ville=="Montrouge") { // solution 1 => avec des pipes
    echo("Vous habitez dans le 92.");
} elseif (in_array ($ville, ["Saint-Denis", "Aubervilliers", "Pantin"])) { // solution 2 => avec in_array
    echo("Vous habitez dans le 93.");
} else {
    echo("Vous habitez hors d'Ile de France.");
}