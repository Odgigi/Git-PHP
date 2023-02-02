<?php
// en php on crée des variables
$premier = 1;

// en PHP il est aussi possible de créer des constantes
// pour ce faire il faut passer par une fonction
define("STATUS", "payé");

// si j'ai besoin de l'utiliser par la suite
echo STATUS . "<br>"; // pour utiliser la constante ne pas mettre de $ devant

// J'ai payé ma facture

echo "J'ai {STATUS} ma facture <br>"; // ne marche pas
echo "J'ai " . STATUS ." ma facture <br>"; // utiliser les . => obligatoire


// nouvelle manière de créer des constantes
const LIVRAISON = "finalisée";
echo "La livraison est " . LIVRAISON . "<br>";

// LIVRAISON = 200; pas possible => constante non modifiable, créée une fois pour toutes

// CONSTANTES_NATIVES de php

// __CONSTANTES__MAGIQUES => retournent des valeurs différentes en fonction du contexte d'exéction
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __LINE__ . "<br>";

// cas pratique => pouvez-vous récupérer le nom du fichier actuellement exécuté ?
$url = "http://localhost/php-initiation/jour4/01-constantes.php";
$path = explode("\\", __FILE__); // ou DIRECTORY_SEPARATOR => fonctionne avec Windows et Linux
var_dump($path);
echo $path[5] . "<br>";
echo $path[count($path) -1 ] . "<br>";
echo end($path) . "<br>";


