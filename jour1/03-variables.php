<?php
// en js pour créer une variable on utilise le mot clé let ou const ou var
// const a = 10;

// en php pas de mot clé
// symbole dollar $devantLeNomDeLaVariable
$a = 10;

// en js le point-virgule final est facultatif
// attention en php le ; en fin d'instruction est OBLIGATOIRE
// un seul ; manquant dans la page => STOP erreur fatale

$b = 30; // les espaces avant et après le symbole d'affectation = sont facultatifs (servent à l'aération)


// comme en javascript on a 5 types de valeurs que l'on peut stocker dans une variable

// string => texte
$c ="Bonjour les amis";
$d = 'Comment allez-vous ?';
// les backticks n'existent pas en PHP

// chiffres entier/ chiffre à virgule => int/ float
$e = 200; // int
$f = -500;

$g = 1.2; // float
$h= -42.51;

// boolean
$i = true;
$j = false;

// 3 types de base variable contient 1 valeur

// 1 variable contient plusieurs valeurs => type complexe
// tableau
// objet

$k = ["Bonjour", "pomme", "poire", "banane"]; // tableau simple / indexé (même chos eque js)

// tableau associatif qui n'existe pas en js
$l = ["nom" => "Alain", "age" => 20, "isAdmin" => true]; // tableau associatif qui contient 3 valeurs

// il est conseillé de mettre des sauts de ligne pour chaque valeur d'un tableau asspciatif pour le rendre plus lisible
$l = [
    "nom" => "Alain",
    "age" => 20,
    "isAdmin" => true
];

// dernier type complexe = objet MAIS pour créer un objet en PHP il faut d'abord créer une class
// $m = { a : } ne fonctionne pas en php
class M{} // d'abord créer une class M
$m = new M(); // l'objet $m est OBLIGATOIREMENT issue de M

// class et objet en PHP font l'objet d'une semaine tant le sujet contient d'informations

// support
// https://formation.webdevpro.net/php-initiation/
// login : php
// password : initiation

// en PHP vous avez un fichier php.ini => fichier qui permet de modifier comment PHP fonctionne
// via le fichier php.ini ajouter des fonctionnalistés qui ne sont pas prévues par défaut 
// module xdebug => équivalent de console.log pour javascript
// par défaut ce module n'est pas installé dans XAMPP
// il est très intéressant de l'onstaller dans son XAMPP
// https://webdevpro.net/xampp-visual-studio-et-le-module-php-xdebug/
// Dans fenêtre windows > variables d'environnement système > Path > nouveau > C:\xampp\php ok> ok

// dans l'adresse du fichier php-initiation
// voir la version de php utilisée: php -v
// php -i > phpinfo.txt permet de récupérer l'ensemble de la configuaration php dans un fichier.txt
// copier-coller le contenu du fichier txt dans le Xdebug wizard
