<?php

// 9 variables qui sont créées automatiquement par PHP

// $_GET
// $_POST
// $_FILE
// $_COOKIE
// $_SERVER
// $_SESSION
// $_REQUEST
// $_ENV
// $GLOBALS

// attention en MAJUSCULES
// $_Get // $_get => n'existent pas

// on peut utiliser une superglobale n'importe où dans le code
// elle n'a pas de scope = portée => super globales

// echo $_GET ; // permet de récupérer des informations dans l'url
// function a (){
//     $b = $_GET ;
// }
$_GET;
var_dump($_GET); // retourne [] (tableau vide)
// http://localhost/php-initiation/jour4/02-super-globales.php

var_dump($_GET); // ["nom" => "Alain"];
// http://localhost/php-initiation/jour4/02-super-globales.php?nom=Alain
// la super globale _GET permet de récupérer la partie variable d'une url => ce qui est après le ?

var_dump($_GET); // ["nom" => "Alain", "age" => "20", "isAdmin" => "false"]
// http://localhost/php-initiation/jour4/02-super-globales.php?nom=Alain&age=20&isAdmin=false
?>

<ul>
    <li><a href="http://localhost/php-initiation/jour4/02-super-globales.php">Lien 1</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-globales.php?nom=Alain">Lien 2</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-globales.php?nom=Alain&age=20&isAdmin=false">Lien 3</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-globales.php?page=1">Lien 4</a></li>
</ul>
