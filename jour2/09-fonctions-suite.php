<?php

declare(strict_types=1);
function calcul(int $a, int $b){
    echo"<p>" . $a * $b . "</p>";
}

calcul(12, 13);
calcul("12", 13); // pra défaut il va traduire le chiffre entre guillemets comme un chiffre et faire le calcul
//and on met le type des données en paramètre
// => typage flexibme

// si on veut vraiment éviter cette tolérance un peu bizarre
// => il existe une fonction declare(strict_types=1);

// en + du type hinting => ajouter la ligne declare-strict_types=1)
// faire en sorte que PHP respecte à la lettre le typage sans ces exceptions
// bonne chose de l'utiliser car rend le code plus prévisible

// return

function information(int $a, bool $b, string $c) : string {
    if($a > 10){
        return $c;
    } elseif ($b) {
        return "le paramètre b est true";
    } else {
        return "cas par défaut";
    }
}

// return permet de récupérer une valeur stockée dans la fonction

// ET il est possible de déclarer EXPLICITEMENT le type de la valeur retournée

// essayer de réduire le nombre d'erreurs au moment de l'exécution
// service que l'on crée pour son propre usage + crée une petite documentation

