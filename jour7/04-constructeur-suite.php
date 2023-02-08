<?php

// http://localhost/jour7/04-constructeur-suite.php

class A {
    public int $nombre = 20;
    public int $chiffre;

    public function __construct(int $chiffre_p){
        $this->chiffre = $chiffre_p;
    }

    public function addition() : int{
        return $this->nombre + $this->chiffre;
    }
}

$a = new A (100);
// echo $a; => erreur
echo $a->nombre . "<br>"; // OK
echo $a->addition() . "<br>"; // OK

// public => accéder à la valeur de la propriété DANS ($this) et HORS ($a) de la class
// => portée globale publique

// private

class B{
    private int $score = 100;

    public function getScore(){ // getter
        return $this->score; // ok je peux accéder à la propriété score
    }
}

// la propriété score n'est utilisable que dans la class
// impossible de l'utiliser HORS de la class

$b = new B();

// $b->score; // je ne connais pas cette propriété
// Fatal error: Uncaught Error : cannot access private property B::$score

echo $b->getScore() . "<br>"; // ok

// encapsulation => stocker des valeurs/ traitements dans une class
// qui ne sont pas accessibles en-dehors de la class
// réaliser des traitements et les sécuriser
// garantir qu'aucune instruction ne peut interagir avec vos traitements

class C {
    private float $prix;

    public function __construct(float $prix_p)
    {
        $this->prix = $prix_p;
    }

    public function getPrixFr(): string {
        return number_format($this->prix, 2, ",", " ") . " euros.<br>";
    }
}

$produit1 = new C(123.5);
echo $produit1->getPrixFr() . "<br>";
$produit2 = new C(2680);
echo $produit2->getPrixFr() . "<br>";



