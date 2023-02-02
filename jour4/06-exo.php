<?php

$etudiants = [
    [
        "nom" => "Alain",
        "age" => "18"
    ],
    [
        "nom" => "Benoit",
        "age" => "25"
    ],
    [
        "nom" => "Céline",
        "age" => "12"
    ],
    [
        "nom" => "Denis",
        "age" => "40"
    ]
];

if(!empty($_GET)){
    $age = $_GET["age"]; // 15

    $course1 = [];
    foreach($etudiants as $etudiant){
        if($age <= $etudiant["age"]){
            array_push($course1, $etudiant);
        }
    }
    $etudiants = $course1;
}

var_dump($etudiants);