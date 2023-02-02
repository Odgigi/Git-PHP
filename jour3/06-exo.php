<?php

// tableau de tableau
// variable formation
// 
// [nom: "php", prix: 750,55, sujets:["xampp", "apache"]]

// écrire dans le navigateur

$formations = [
    [
    "nom" => "js",
    "prix" => 2300.20,
    "sujets" => ["install", "navigateur", "formulaire"]
    ],
    [
    "nom" => "php",
    "prix" => 750.55,
    "sujets" => ["xampp","apache"]
    ]
];

// la formation js coûte 2300,2 euros et contient 3 sujets
for($i=0; $i< count($formations); $i++){
    $prixFr = number_format($formations[$i]["prix"], 1, ",", " ");
    $nbSujets = count($formations[$i]["sujets"]);
    echo"<p>La formation {$formations[$i]["nom"]} coûte {$prixFr} euros et contient {$nbSujets} sujets.</p>";
}

// la formation php coûte 750,5 euros et contient 2 sujets
foreach($formations as $f){
    $prixFr = number_format($f["prix"], 1, ",", " ");
    $nbSujets = count($f["sujets"]);
    echo "<p>La formation {$f["nom"]} coûte {$prixFr} euros et contient {$nbSujets} sujets.</p>";
}


