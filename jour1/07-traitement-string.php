<?php
// 07 traitement-string.php_check_syntax
// concaténation = addition de plusieurs textes

$prenom = "Alain";
$nom = "DOE";
// Alain DOE découvre le PHP
$phrase = "$prenom $nom découvre le PHP."; // concaténation " " dans les guillemets
                                        // j'ai écrit les varaibles

echo $phrase; // permet d'écrire dans la page html
// http://localhost/php-initiation/jour1/07-traitement-string.php

$phrase2 = "{$prenom} {$nom} découvre le PHP."; // $variable entourée de {}
echo $phrase2;

$phrase3 = $prenom  . " " . $nom . " découvre le PHP.<br>";
echo $phrase3;

// écrire avec PHP la phrase suivante
// Victor Hugo a dit ".
$parole = "Victor Hugo a dit \"Vivent les Misérables\".";
echo $parole; // utilisation du symbole anti-slash devant les guillemets à interpréter comme des guillemets et non comme la fin du string

// si on veut que le texte saute une ligne au prochain echo il faut ajouter la balise <br> à la fin de la concaténation à l'intérieur
// autre manière de faire un sauts de ligne

$unTexte = "<div>Bonjour $prenom, comment allez-vous ? </div>";
echo $unTexte;

$phraseMultiLignes = "hello les amis <br>
comment allez-vous ? <br>
j'espère bien !";
// avec les guillemets doubles il ets possible de suater des lignes dans la valeur de la variable
echo $phraseMultiLignes;