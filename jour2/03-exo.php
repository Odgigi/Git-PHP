<?php
// créer une variable $age
// initialiser la variable $age = 30
// si l'age est compris entre 0 et 10
// alors afficher dans le navigateur vous êtes un enfant
// si l'age est compris entre 10 inclus et 18
// alors afficher dans le navigateur vous êtes un ado
// si l'age est supérieur ou égal à 18 et inférieur ou égal à 120
//  alors afficher dans le navigateur vous êtes un adulte
// sinon
// afficher dans le navigateur "l'âge mentionné n'est pas conforme"

$age = 30;
if($age >= 0 && $age < 10){
    echo("Vous êtes un enfant");
} elseif ($age >= 10 && $age <= 18) {
    echo("Vous êtes un ado");
} elseif ($age >= 18 && $age <= 120) {
    echo("Vous êtes un adulte");
} else {
    echo("L'âge mentionné n'est pas conforme.");
}

// texte chiffre à écrire dans navigateur
// echo
// debuguer une variable => valeur / type/ où dans le script xdebug
// var_dump

// boolean
// echo true => 1
// echo false => rien
var_dump(true); // bool(true)
var_dump(false); // bool(false)