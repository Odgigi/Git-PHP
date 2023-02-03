<?php
// http://localhost/jour2/05-fonctions.php

// permettent de stocker des instructions

// pour créer une fonction il faut utiliser le mot clé function

function a(){
    // dans la variable a on va pouvoir stocker des instructions
    $largeur = 10;
    $hauteur = 30;
    $aireRectangle = "l'aire d'un rectangle de largeur $largeur et de hauteur $hauteur est égal à " . $largeur * $hauteur;
    echo "<p>$aireRectangle</p>";
    // la fonction a contient 4 instructions
}

// créer une fonction == stocker dans la RAM
// exécuter les instructions stockées dans la fonction
a();