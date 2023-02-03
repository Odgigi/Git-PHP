<?php

// créer une fonction qui s'appelle aireCercle
// dispose de 2 paramètres rayon chiffre à virgule et unité chaîne de caractères
// contient les instructions suivantes
// // créer une phrase "un cercle de rayon rayon a une aire de " Pi * rayon puissance 2 + unite ²
// retourner la variable phrase (de type string)

// exécuter cette fonction avec les paramètres suivants 
// 30  ,cm
// 12.4 , km

declare(strict_types=1); // permetde respecter de manière stricte les types ajoutés dans la signature d'une fonction

// signature de la fonction
function aireCercle(float $rayon, string $unite) : string{
    $Pi= 3.14;
     $phrase = "Un cercle de rayon $rayon a une aire de " . $Pi * $rayon**2 . " $unite <sup>2</sup>";
    return "<p>$phrase</p>";
    // permet de récupérer un traitement réalisé dans une fonction
}

echo aireCercle(30, "cm");
echo aireCercle(12.4, "km");

// function a() : int{} // permet de dire clairement le type de return
// echo == document.querySelector().innerHTML
// var_dump() == console.log

// boucle @for sass
// condition @if
// fonction @mixin

