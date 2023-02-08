<?php
// en PHP on peut créer des propriétés et des méthodes dans une class

// en plus certains noms de méthode bien spécifiques vont avoir la faculté de s'exécuter automatiquement sans qu'on les appelle => on les appelle MAGIQUES (au nombre de 17)

class A {
    public function __construct()
    // méthode magique => respecter le nom de la méthode
    // __construct => double tiret bas + minuscules
    // s'exécute automatiquement lorsqu'on crée un objet
    {
        // fonction constructrice de la class
        // va permettre de définir la class
        // => rôle du constructeur
    }
}

$a = new A(); // création objet $a ET __construct()
// la class contient la méthode __construct()
// celle-ci s'exécute AUTOMATIQUEMENT en même temps que le new
// toutes les autres méthodes il faut les appeler pour qu'elles s'exécutent $a->toto();

class B {
    public string $nom; // SANS le = SANS valeur
    public int $largeur;

    function __construct(string $nom_p, int $largeur_p){
        // remplir de paramètres et d'instructions qui vont initialiser des propriétés
        $this->nom = $nom_p; // donne une valeur à une propriété depuis un paramètre
        $this->largeur = $largeur_p;
    }
}
$b = new B("bonjour", 42);
// donc 