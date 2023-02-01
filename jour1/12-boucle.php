<?php
// boucle fonctionne de la même manière que sur javascript


// dans les parenthèses de for:
    // $i = 0; // incrément
    // $i < 3; // condition de sortie de la boucle
    // $i++ // fait d'augmenter de +1 la variable $i et de stocker le résultat du calcul dans elle-même (opérateur unaire)
    // => pareil que dans javascript
for($i = 0; $i < 3; $i++){

}

// spécial PHP => idéal lorsqu'on veut mixer du html et boucle PHP
?>
<?php
for($i = 0; $i <= 3; $i++) : ?>
<h1><?php echo $i ?></h1>
<?php endfor ?>

<?php
for ($i = 0 ; $i < 100; $i++) {
    echo "<h1>$i</h1>";
}
?>