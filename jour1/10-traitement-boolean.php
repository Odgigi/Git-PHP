<?php
// 10-traitement-boolean.php

// http://localhost/php-initiation/jour1/10-traitement-boolean.php

$toto = false;
$titi = true;

$test1 = 50 > 10; // true

echo $test1; // 1
var_dump($test1); // true

$test2 = 50 < 10; // false
echo $test2; // reien aucune réponse
var_dump($test2); // false

// var_dump() ets conseillé pour débuger les variables boolean

// > < >= <= == != === !== les mêmes que js

$test3 = 10 === "10"; // false
// verif en valeur et type
var_dump($test3);

$test4 = 10 == "10"; // true
// vérifier la valeur et transtypage
var_dump($test4);

// && || ! (les mêmes que js)

$test5 = 10 > 30 || 20 < 30;
// false || true
// true
var_dump($test5); // true

// => déconseillé d'utiliser à la palce de && => AND
// => déconseillé d'utiliser à la place de || => OR

$test6 = 80 > 60 AND 12 > 11;
var_dump($test6);
// => true

$test6 = 80 > 60 AND 11 > 12;
//          true AND false
//              true // le AND est un opérateur qui passe après le symbole d'affectation =
$test6 = (80 > 60 AND 11 > 12);
var_dump($test6);