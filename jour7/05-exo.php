<?php

class Livre {
    private string $auteur;
    private int $jour;
    private int $mois;
    private int $annee;
    private string $titre;

    function __construct(string $auteur_a, int $jour_j, int $mois_m, int $annee_a, string $titre_t){
        $this->auteur = $auteur_a;
        $this->jour = $jour_j;
        $this->mois = $mois_m;
        $this->annee = $annee_a;
        $this->titre = $titre_t;
    }

    public function getDateFr(): string{
        // return $this->jour . "/" . $this->mois . "/" . $this->annee;
        $timeStamp = mktime(0,0,0,$this->mois, $this->jour, $this->annee);
        // timestamp = le nombre de secondes écoulées depuis le 1er janvier 1970 et la date concernée
        return date("d/m/Y", $timeStamp);
        // même que sur SQL strftime()
        // https://sqlite.org/lang_datefunc.html
    }

    public function description(){
        return "{$this->auteur} a publié {$this->titre} le ". $this->getDateFr();
    }
}

$livre1 = new Livre("Victor Hugo", 1, 1, 1880, "Notre-Dame de Paris");
echo $livre1->getDateFr() . "<br>";
echo $livre1->description() . "<br>";

/* mktime(
    int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null
): int|false */

/* mktime() is useful for doing date arithmetic and validation, as it will automatically calculate the correct value for out-of-range input. For example, each of the following lines produces the string "Jan-01-1998".

<?php
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
?> 

Warning
Please note that the ordering of arguments is in an odd order: month, day, year, and not in the more reasonable order of year, month, day.*/

/* date(string $format, ?int $timestamp = null): string
Returns a string formatted according to the given format string using the given integer timestamp (Unix timestamp) or the current time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time().

Warning
Unix timestamps do not handle timezones. Use the DateTimeImmutable class, and its DateTimeInterface::format() formatting method to format date/time information with a timezone attached. */

// date_create(string $datetime = "now", ?DateTimeZone $timezone = null): DateTime|false

// créer le fichier 05-exo.php
// ce fichier contient une class Livre
// contient 5 propriétés privées
// auteur texte
// jour chiffre entier
// mois chiffre entier
// année chiffre entier
// titre texte

// créer une fonction constructrice qui permet d'iniatiliser les 5 propriétés privées
// créer une méthode datefr qui permet d'afficher la date au format fr 
// jj/mm/aaaa
// créer une méthode description qui écrit le texte suivant 
// auteur a publié le titre le jj/mm/aaaa
// créer l'objet $livre1 qui aura comme valeur 
// */ "Victor Hugo"
// 1
// 1
// 1880 /* 

