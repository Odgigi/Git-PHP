<?php

class Etudiant {
    public string $nom = "Alain";
    public int $age = 24;
    public string $adresse = "75 rue de Paris";
    public array $competences = ["js", "php"];
}

$etudiant1 = new Etudiant();

// Alain habite au 75 rue de Paris
echo $etudiant1->nom . " habite au " . $etudiant1->adresse .".<br>";
echo "{$etudiant1->nom} habite au {$etudiant1->adresse}.";

// A 24 ans, il maîtrise 2 technologies: js et php.
echo "A " . $etudiant1->age . " ans, il maîtrise " . count($etudiant1->competences) . " technologies: " . $etudiant1->competences[0] . " et " . $etudiant1->competences[1] . ".";


