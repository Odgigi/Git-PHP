h<?php

// http://localhost/php-initiation/jour9/01-heritage.php

// class Page{
//     public string $titre = "titre page";
//     public int $dureeLecture = 20;
// }

// $p = new Page();
// echo $p->titre . "<br>";

// class PageAccueil{
//     public string $titre = "titre page";
//     public int $dureeLecture = 20;

//     public function generer(){
//         return "<h1>'{$this->titre}</h1>";
//     }
// }

// dans les deux classes => une partie identique (ici 2 propriétés)
// comment faire pour éviter de se répéter ?
// on peut utiliser l'héritage => permet de copier TOUT le code d'une classe dans une autre

class Page{ // class Parent
    public string $titre = "titre page";
    public int $dureeLecture = 20;
}
class PageAccueil extends Page{ // class qui hérite avec le mot extends class enfant
    public function generer(){
        return "<h1>'{$this->titre}</h1>";
    }
}

// même chose que ce qui précède
// dans une class il est posiible de reprendre le code d'une autre class (propriétés et fonctions)
// par contre dans une fonction il n'est pas possible de reprendre le code d'une autre fonction

// polymorphisme

