<?php
// créer une variable qui s'appelle villes qui est de type tableau indexé
// ce tableau contient 2 tablaeux associatifs

$villes = [
    [
    "nom" => "Paris",
    "nbHabitants" => 12_271_794,
    "arrondissements" => 20,
    "monuments" => ["Sacré-Coeur", "Tour Eiffel"]
    ],
    [
    "nom" => "Marseille",
    "nbHabitants" => 863_310,
    "arrondissements" => 20,
    "monuments" => ["Vieux-Port", "Vélodrome"]
    ] 
];
// écrire dans le navigateur
// Lorsque je vais à Paris je vais visiter deux monuments: Sacré-Coeur et Tour Eiffel
// Lorsque je vais à Marseille je vais visiter deux monements: Vieux-Port et Vélodrome

foreach($villes as $ville){
    echo "<p>Lorsque je vais à {$ville["nom"]} je vais visiter deux monuments : {$ville["monuments"][0]} et {$ville["monuments"][1]}.</p>";
}
for($i= 0; $i < count($villes); $i++){
    echo"<p>Lorsque je vais à {$villes[$i]["nom"]} je vais visiter deux monuments: {$villes[$i]["monuments"][0]} et {$villes[$i]["monuments"][1]}.</p>";
}


