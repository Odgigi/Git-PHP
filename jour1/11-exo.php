<?php
// 11-exo.php

// dire si c'est true ou false

$a = 2 >= 2; // true
var_dump($a);

$b= "a" =="ab"; // false
var_dump($b);

$c = 2 != 3 && 10 < 33; // NA erreur de syntaxe > corrigée true
var_dump($c);

$d = "hello" > "bonjour"; // transfrome en binaire h est supérieur à b > true
var_dump($d);

$e = 2 == "2"; // true
var_dump($e);

$f = 2 === "2"; // false
var_dump($f);

$g = ((2 != 5 && 3 > 4 || 2 <= 14)); // true
var_dump($g);

$h = (2 != 5 && (3 > 4 || 2 <= 14)); // true
var_dump($h);

$i = (2 != 5 && 3 > 4 || 2 <= 14); // true
var_dump($i);