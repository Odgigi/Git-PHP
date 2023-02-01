<?php
/* en utilisant la boucle for, afficher dans le navigateur les strings suivants:
    4 x 2...
    4 x 6 = 24
    */
?>
    <h1>solution 1</h1>
<?php
for($i=2; $i <= 6; $i++) : ?>
 <p><?php echo "4 x $i = " . $i * 4 ?></p>
 <?php endfor ?>

 <h1>solution2</h1>

 <?php
 for($i = 2; $i <= 6; $i++) {
    $resultat = "4 x $i = " . $i * 4 . "<br>";
    echo $resultat;
 }