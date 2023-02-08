<?php

class Exo {
    public int $note;
    public string $enonce;
    public array $sujets;
    // 3 propriétés typées MAIS sans valeur
    function __construct(int $note_n, string $enonce_e, array $sujets_s){
        $this->note = $note_n;
        $this->enonce = $enonce_e;
        $this->sujets = $sujets_s;
    }
    public function getAll(): string{
        return $this->note . " " . $this->enonce;
    }
}

$e1 = new Exo(20, "créer une fonction", ["créer", "exécuter"]);
$e2 = new Exo(10, "créer une variable", ["lister", "compter", "afficher"]);

// on ne peut pas concaténer un objet avec du texte
// $e1 = new Exo(20, "créer une fonction", ["créer", "exécuter"]) . "<br>; => erreur
// echo $e1 . "<br>"; => erreur
// on peut concaténer une propriété d'un objet avec du texte
// on peut concaténer une méthode exécutée d'un objet avec du texte
echo $e1->note . "<br>"; // OK !!!
echo $e1->getAll() . "<br>"; // ok pour note et enonce
var_dump($e1->sujets) . "<br>"; // le tableau ne peut s'afficher dans un return => il faut faire une boucle
// sinon => var_dump() du contenu du tableau