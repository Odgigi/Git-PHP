<?php

class Exo {
    public int $note = 20;

    public function enonce(): string{
        return "Veuillez réaliser l'exercice suivant:";

    }
    public function conseil(bool $avis) : string{
        if ($avis === true){
            return "Voici une vidéo à regarder";
        } else {
            return "Aucune astuce pour cet exo.";
        }
    }
};

$e = new Exo();
echo $e->enonce() . "<br>";
echo $e->conseil(true) . ".<br>";