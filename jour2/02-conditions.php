<?php
// http://localhost/jour2/02-conditions.php

// structures conditionnelles if(){} sont très proches de javascript en PHP
// quasi identique

$largeur = 30;

if($largeur < 10){
    var_dump("modèle XS");
} elseif ($largeur < 40) { // il n'y a pas d'espace entre else et if
    var_dump("Modèle L");
} elseif ($largeur < 80) { // cette ligne est exécutée et les suivantes sont ignorées
    var_dump("Modèle XL");
} else {
    var_dump("La valeur est invalide");
}

