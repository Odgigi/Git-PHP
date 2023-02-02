<?php
// créer un tableau indexé
// nom de la variable tableau
// remplir de texte 7 valeurs
// lundi => dimanche // 6 inclus maximum
declare(strict_types=1);
$tableau = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];

// traitement classique => parcourir le tableau
// utiliser chaque valeur du tableau

for($i = 0; $i <= 6; $i++){
    echo"{$tableau[$i]}<br>";
}
for($i = 0; $i < count($tableau); $i++){ // count() fonction native de php => modifier strictement inférieur
    echo"{$tableau[$i]}<br>";
}

// count() mot-clé du langeg PHP
// manière exclusive d'être utilisée: 1er paramètre OBLIGATOIREMENT array
/* for (let i=0; i < tableau.length; i++){
    document.querySelector("div").innerHTML += `${tableau[i]}<br>`;
} */

foreach($tableau as $jour){ // $tableau[$i]
    echo "{$jour}<br>";
}