<?php

// créer un tableau associatif
// nom de la variable serveur

// 5 éléments du tableaux :
//  source : "c:\"
// langage HTML
// protocole http
// host localhost
// fichier index.php 

// écrire dans le navigateur les phrases suivantes 

// XAMPP lance un serveur qui écoute l'adresse http://localhost
// le fichier en cours d'exécution est http://localhost/index.php et il est en HTML


$serveur = [
    "source" => "C:\*",
    "langage" => "HTML",
    "protocole" => "http",
    "host" => "localhost",
    "fichier" => "index.php"
];

echo "<p>XAMPP lance un serveur qui écoute l'adresse {$serveur["protocole"]}" . "://" . "{$serveur["host"]}</p>";

echo "<p>Le fichier en cours d'exécution est {$serveur["protocole"]}" . "://{$serveur["host"]}" . "/{$serveur["fichier"]} et il est en {$serveur["langage"]}.</p>";