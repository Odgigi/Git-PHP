<?php

class Formation {
    public string $nom = "devOps";
    public int $duree = 5;
    public int $prix = 5_000;
    public array $matieres = ["linux", "php", "html", "css"];
    public function devis() : string {
        return "La formation " . $this->nom . " coûte " . number_format($this->prix, 0, ",", " ") . " euros. <br>";
    }
    public function programme() : string {
        return "Il y a " . count($this->matieres) . " sujets abordés durant les " . $this->duree . " semaines.<br>";
    }
    public function sommaire() : string {
        return "Vous allez étudier {$this->matieres[0]}, {$this->matieres[1]}, {$this->matieres[2]} et {$this->matieres[3]}<br>";
    }
}

$pres = new Formation();
echo $pres->devis() . "<br>";
echo $pres->programme() ."<br>";
echo $pres->sommaire() . "<br>";