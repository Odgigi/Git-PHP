<?php
// on crée une variable

$depenses = [12, 20,30, 50];

// on crée une fonction

function total(array $tab) : int{
    return array_sum($tab);
}

// on exécute la variable

echo total($depenses);