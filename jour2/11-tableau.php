<?php
// en PHP il existe deux manières de créer des tableaux

$arbres = ["chêne", "sapin", "pommier"];

// tableau indexé
// chaque valeur du tableau va être utilisable via sa position => son index dans le tableau

// J'ai acheté un sapin de Noël
$phrase = "<p>J'ai acheté un {$arbres[1]} de Noël.</p>";
echo $phrase;


// tableau associatif qui contient 5 valeurs
$livre = [
    "nom" => "Découvrir le langage sass",
    "auteur" => "Alain",
    "prix" => 10.5,
    "datePublication" => "01/01/2023",
    "avis" => "8/10"
];

echo "<p>le livre s'appelle : {$livre["nom"]}</p>";
// remarque: intéressant de mettre des {} autour de la variable