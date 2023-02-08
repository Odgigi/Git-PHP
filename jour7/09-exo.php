<?php

$connexion = new PDO("sqlite:./06-bdd.db");

// $connexion->query('
//     DELETE FROM auteur where id >= 5
// ');
// echo "suppression effectuée";

// $connexion->query ('
//     UPDATE auteur SET dt_creation = "2023-02-01" WHERE id = 2;
    
// ');

// echo "mise à jour effectuée";

$connexion->query ('
    UPDATE auteur SET dt_creation = "2023-01-15" WHERE id = 3;
');

echo "mise à jour effectuée";
