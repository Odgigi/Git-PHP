<?php

// créer une fonction note
// prend 5 paramètres $a, $b, $c, $d, $e
// les 5 paramètres doivent être de type entier
// la fonction permet de calculer la moyenne des notes saisies

// exécuter la fonction avec les valeurs suivantes
// 0 10 20 5 15
// 12 14 15 6 8

function note(int $a, int$b, int $c, int$d, int $e){
    $moyenne = ($somme = $a + $b + $c + $d + $e) / 5;
    echo "<p> " . $moyenne . "</p>";
}

note(0, 10, 20, 5, 15);
note(12, 14, 15, 6, 8);

function note2 (int $a ,int $b ,int $c ,int $d ,int $e) {
    $total = $a ;
    $total += $b;
    $total += $c;
    $total += $d;
    $total += $e;
    echo "<p> ". ( $total) / 5 ."</p>";
}

function note3 (int $a ,int $b ,int $c ,int $d ,int $e) {
    $chiffres = [$a, $b,$c,$d, $e];
    $total = array_sum($chiffres);
    echo "<p> ". ( $total) / 5 ."</p>";
}

function note4 (array $chiffres) {
    $total = array_sum($chiffres);
    echo "<p> ". ( $total) / 5 ."</p>";
}
note4([0, 10, 20, 5, 15]);

