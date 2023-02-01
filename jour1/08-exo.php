<?php
// créer 3 variables:
// prenom Victor
// nom Hugo
// ville Paris

// écrire dans le navigateur les 3 phrases suivantes:
// Victor Hugo a vécu à Paris en 1880.
// Victor Hugo a quitté Paris à la fin de sa carrière.
// Victor Hugo a écrit "Et s'il n'en reste qu'un je serai celui-là".

$prenom = "Victor";
$nom = "Hugo";
$ville = "Paris";
$annee = "1880";

$phrase1 = $prenom . " " . $nom . " a vécu à $ville en $annee.<br>";
$phrase2 = "$prenom $nom a quitté $ville à la fin de sa carrière.<br>";
$phrase3 = "{$prenom} {$nom} a écrit \"Et s'il n'en reste qu'un je serai celui-là.\"<br>";
echo $phrase1;
echo $phrase2;
echo $phrase3;

echo "$phrase1 $phrase2 $phrase3";