<?php
// 09-traitement-chiffres.php

$a = 10;
$b = 30;

echo $a +$b . "<br>"; // addition
echo $a - $b . "<br>"; // soustraction
echo $a * $b . "<br>"; // multiplication
echo $a / $b . "<br>"; // division
echo $a ** $b . "<br>"; // puissance
echo $a % $b . "<br>"; // modulo = reste entier

// http...

$animaux = "12 vaches";
$prix = 500;
$total = @($animaux * $prix) . "<br>";
echo $total;

// chaîne de caractères qui commence par des chiffres => prend en compte les chiffres pour faire des calculs mais donne un message de warning tout en affichant le résultat
// @traitement => permet d'éviter d'afficher les warnings à l'écran

$c = 30;
$d = "40";
echo $c + $d; // 70 en PHP mais en js "3040"

// $e = 30;
// $f = "40 francs";
// echo $e * $f;

