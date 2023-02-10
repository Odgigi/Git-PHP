<?php

// http://localhost/php-initiation/jour9/02-polymorphisme.php

// class Guerrier{
//     public int $vie = 100;
//     public int $degat = 20;

//     public function frapper(){
//         return $this->degat;
//     }
// }

// class Magicien{
//     public int $vie = 50;
//     public int $degat = 40;

//     public function frapper(){
//         return $this->degat;
//     }
// }

// class Personnage{
//     public int $degat;

//     public function frapper(){
//         return $this->degat;
//     }
// }

// class Guerrier extends Personnage{
//     public int $vie = 100;
//     public int $degat = 20;
// }

// class Magicien extends Personnage{
//     public int $vie = 50;
//     public int $degat = 40;
// }

class Personnage{
    public int $vie;
    public int $degat;

    public function __construct(int $degat_p, int $vie_p){
        $this->degat = $degat_p;
        $this->vie = $vie_p;
    }
    public function frapper(){
        return $this->degat;
    }
}

class Guerrier extends Personnage{
    public function __construct(){
        parent::__construct(20, 100); // exécute le constructeur du parent avec les arguments 20 et 100
    }
}
class Magicien extends Personnage{
    public function __construct(){
        parent::__construct(40, 50);
    }
}
class Mage extends Personnage{
    public function __construct(){
        parent::__construct(25, 75);
    }
}
$g = new Guerrier();

$m = new Mage();
echo $m->vie . "<br>"; // 75
echo $m->frapper(); //25

// idem avec le CRUD
