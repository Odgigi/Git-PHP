<?php
// http://localhost/php-initiation/jour6/04-methode.php

class Formation {

    // 2 propriétés
    public string $nom = "Développeuse Web";
    public int $duree = 20;

    // function => méthode de class
    public function presentation (string $sujet) : string {
        return "Je suis une formation sur {$sujet}";
    }
}

// extérieur ou HORS de la class
$f = new Formation();

echo $f->nom . "<br>"; // utiliser une propriété hors de la class

echo $f->presentation("css") . "<br>"; // exécuter une méthode hors de la class

