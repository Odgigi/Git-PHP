<?php

function calcul(){
    $a = 2;
    $b = 3;
    echo"<p>" . $a + $b . "</p>";
}

calcul();

// attention en php il n'est pas possible de définir deux fois la fonction dans un même fichier/ projet
// Fatal error: Cannot redeclare function()
// => calcul2();
function calcul2(){
    $a = 10;
    $b = 5;
    echo"<p>" . $a + $b . "</p>";
}

// pour pouvoir rendre les valeurs dynamiques =>ajouter des paramètres à le fonction

function calcul3($a, $b){
    echo "<p>" . $a + $b . "</p>";
}
// définir la valeur de $a et $b au moment de l'appel de la fonction
calcul3(12,15); // $a = 12 et $b = 15
calcul3(33, -20); // $a = 33 et $b = -20

// à partir de la version 7 de PHP il est possible de donner les types de paramètres
function calcul4(int $a, int $b){
    echo "<p>" . $a + $b . "</p>";
}

calcul4(12, 15);
calcul4("text", 15); // Fatal error: Uncaught TypeError: calcul4():Argument #1 ($a) must be of type int, string given.
