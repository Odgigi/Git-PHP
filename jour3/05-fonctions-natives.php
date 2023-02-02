<?php

// en plus de smots clés de base de l'informatique
// if for function ++ = >= "" etc
// PHP est livré avec entre 200 à 500 fonctions natives

// dans le langage => des fonctions qui vont permettre de réaliser des traitements

$tab = ["a", "b", "c"];
echo count($tab) . "<br>"; // compte le nombre d'éléments

// php.net => site officiel de pHp / documentation
// count(Countable|array $value, int $mode = COUNT_NORMAL): int

// 5 types de base
// string
// chiffres int/ float
// boolean
// array => count()
// object


// fonctions natives de php pour manipuler les tring
// echo => affiche un texte à l'écran
$texte = "bonjour<br>";
echo($texte);
echo $texte; // quand la fonction n'a qu'un paramètre => pas obligé de mettre les parenthèses

// explode => pour transformer un string en array
$description = "2,cm,20,mètre";
$resultat = explode(",", $description); // ["2", "cm", "20", "mètre"];
var_dump($resultat);
echo $resultat[count($resultat) -1]; // "mètre"

$url = "http://localhost/php-initiation/jour3/05-fonctions-natives.php";
$tabUrl = explode("/", $url);
echo $tabUrl[count($tabUrl) -1] . "<br>"; // 05-fonctions-natives.php

// htmlentities
$virus = "<script>alert('je suis un virus')</script>"; // le javascript s'exécute automatiquement => dangereux !!!
echo $virus;
echo htmlentities($virus); // le code est échappé => permet de bloquer l'exécution du html qui contient du js


// number_format
$prix = 2532.44;
// 2 532,44
echo number_format(2532.44) . "<br>"; // $prix
echo number_format(2532.44, 2) . "<br>"; // 2e paramètre => nombre de chiffres après la virgule
echo number_format(2532.44, 2, ",") . "<br>"; // 3e paramètre => séparateur entre entiers et décimales
echo number_format(2532.44, 2, ",", " " ) . "<br>"; // 4e paramètre => séparateur des milliers


// str_contains
// est-ce qu'un texte contient du texte ?
$titre = "un nouvel article sur le php";
// est-ce que dans le titre il y a le mot php ???
$recherche = str_contains($titre, "php");
var_dump($recherche); // true

// strlen
$paragraphe = "lorem ipsum";
echo strlen($paragraphe) . "<br>"; // 11

// subst_replace
$activite = "j'aime manger des frites";
echo substr_replace($activite, "pommes", 18, 6);
// j'aime manger des frites et des pommes
echo substr_replace($activite, " et des pommes", 24, 0). "<br>";

// str_replace => idem mais avec un caractère de début et un caractère de fin