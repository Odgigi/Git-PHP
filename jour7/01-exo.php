<?php

class Immeuble {
    public string $adresse = "102 Rue de Lille";
    public array $habitants = ["Alain", "Céline", "Pierre", "Zorro"];
    public bool $etatAscenseur = false;

    public function infoMaintenance() : string{
        if($this->etatAscenseur === false){ // soit == soit === mais pas =
            return "L'ascenseur est en panne.";
        } elseif($this->etatAscenseur === true) {
            return "L'ascenseur est en fonction.";
        } 
    }
    public function description() : string{
        return " {$this->habitants[0]}, {$this->habitants[3]} et {$this->habitants[1]} habitent au {$this->adresse}.<br>";
    }
}

$i = new Immeuble();
echo $i->infoMaintenance() ."<br>";
echo $i->description();

// comment faire pour donner une valeur variable aux propriétés d'une class ?

// méthode magique constructeur

class A {
    public int $largeur; // créer une propriété de class

    public function __construct($largeur_p)
    // fonction magique qui contient une instruction
    {
        $this->largeur = $largeur_p;
        // donne une largeur $this->largeur
    }
}

