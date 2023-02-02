<?php
$fleurs = [
    [
        "nom" => "rose",
        "couleur" => "rose",
        "origine" => "France"
    ],
    [
        "nom" => "jasmin",
        "couleur" => "blanc",
        "origine" => "Tunisie"
    ],
    [
        "nom" => "tulipe",
        "couleur" => "jaune",
        "origine" => "Pays-Bas"
    ]
];

if(!empty($_GET)){
    $nom = $_GET["nom"];

    $course = [];
    foreach($fleurs as $fleur){
        if($fleur["nom"] === $nom){
            array_push($course, $fleur);
        }
    }
    $fleurs = $course;
}

if(count($fleurs) === 1){
    echo "<h1> une fleur</h1>";
    
} elseif(count($fleurs) > 1){
    echo "<h1> toutes les fleurs </h1>";
    
} else {
    echo "<h1>aucune fleur</h1>"; 
}
var_dump($fleurs);