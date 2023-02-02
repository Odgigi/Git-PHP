<?php

$produits = [
    [
        "nom" => "Playstation",
        "prix" => 300.5
    ],
    [
        "nom" => "Nintendo DS",
        "prix" => 200
    ],
    [
        "nom" => "Xbox",
        "prix" => 320
    ]
    
];

if(!empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];

    $course2 = [];
    foreach($produits as $produit){
        if($min <= ($produit["prix"]) && $max >= ($produit["prix"])){
            array_push($course2, $produit);
        }
    }
    $produits = $course2;
}

var_dump($produits);