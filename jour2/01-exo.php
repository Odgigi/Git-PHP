<?php
// afficher dans la page web les chaînes de caractères suivantes

// 3 x 6 = 18
// 3 x 9 = 27
// 3 x 12 = 36

// et aussi:
// 5 x 9 = 45
// 5 x 7 = 35
// 5 x 5 = 25
// 5 x 3 = 15
// => pour cela vous devez réaliser 2 boucles for


for($i = 6; $i <= 12; $i= $i + 3){
    ?><h1><?php echo $resultat = "3 x $i = " . $i * 3?></h1><?php
}; 

// solution 2
echo "solution 2 pour question 1<br>";
for($i = 6; $i <= 12; $i += 3){ // avec opérateur unaire +=
    $resultat = "3 x $i = " . $i*3;
    echo "<p> $resultat</p>";
}

/* maximum 9
minimum inclus 3
diminution -2 */

echo "solution 2 pour question 2";
for($i=9; $i >= 3; $i = $i -2){ // avec opérateur unaire -= 2
    $resultat = "5 x $i = " . $i * 5;
    echo "<p>$resultat</p>";
}



