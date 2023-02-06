<?php
// http://localhost/php-initiation/jour6/02-membres-class.php

class Fleur {
    public $nom = "Rose";
    public float $prix = 20.5;
    public string $unite = "euro";
    public bool $enVente = true;
    // propriétés de la class
    // 3 variables qui existent dans le cadre de la class
    // typage est facultatif mais fortement conseillé = > le langage PHP va faire une pré-lecture du code
    // public => scope de la variable = portée d'utilisation de la variable
    // public => on peut les utiliser (lire et modifier) dans la class
    // mais aussi hors de la class
}


// créer un objet depuis la class Fleur => dans la variable $fleur1
$fleur1 = new Fleur();

// J'ai acheté une rose à 20.5 euros.

echo "J'ai acheté une " . $fleur1->nom . "à " . number_format($fleur1->prix, 1, ",") . " " . $fleur1->unite . "s.<br>";

echo $fleur1->nom . "<br>";// utiliser les symboles-> pour récupérer la valeur de la propriété nom
echo $fleur1->prix . "<br>.";

// en js pour créer l'objet fleur
// const fleur = {nom: "Rose", prix: 20.5, enVente: true}
// fleur.nom