<?php
class Rectangle {
    public int $largeur = 20;
    public int $hauteur = 30;

    public function calculPerimetre(){
        // (20 + 30) * 2
        // périmètre = (largeur + hauteur) * 2
        // pour récupérer ces propriétés à l'intérieur de la class => $this instance interne de la class = pseudo-variable
        return ($this->largeur + $this->hauteur) * 2;
    }
}

// équivalent à l'extérieur de la class:
$rectangle = new Rectangle();
$rectangle->largeur;
echo $rectangle->calculPerimetre() . "<br>";