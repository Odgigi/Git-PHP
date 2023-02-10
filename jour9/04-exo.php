<?php

abstract class Form{
    public int $nbCote;
    public string $couleur;
    
    public function __construct(int $nbCote_p, string $couleur_p){
        $this->nbCote = $nbCote_p;
        $this->couleur = $couleur_p;
    }
    abstract public function surface();
}
// étant donné que dans la class Form créée une méthode abstarite
// TOUTES les classes qui héritent de la class Form doivent obligatoirement contenir et implémenter la méthode abstraite

class Rectangle extends Form{
    public function __construct(){
        parent::__construct(4, "blue");
    }
    public function surface(){
        return 10;
    }
}
$r = new Rectangle();
echo $r->surface();