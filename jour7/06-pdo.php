<?php

// utiliser une class native
// comme les fonctions natives de php
// strlen() count() filter_var() empty() format_number()
// strlen(string $string) int
// => "description" dans php.net

// il existe aussi des class natives => livrées dans le langage : function = == === ++ ... if for foreach

// class native => PDO = PHP Data Object

// https://www.php.net/manual/fr/class.pdo => présentation de la class en entier
/* class PDO {
Méthodes 
public __construct(
    string $dsn,
    ?string $username = null,
    ?string $password = null,
    ?array $options = null
)
*/

// class l'ensemble des méthodes publiques de la class avec leurs signatures
// le nom de la méthode
// paramètres et leur type hinting
// le type du retour des méthodes

// PDO permet de manipuler des bases de données
// exécuter des requêtes SQL directement grâce à elle:

// CREATE TABLE
// ALTER TABLE
// DROP TABLE

// enregistrements dans une table:
// INSERT
// SELECT
// UPDATE
// DELETE

// installer l'extension SQLite de alexcvzz

// créer un fichier 06-bdd.db

$connexion = new PDO("sqlite:./06-bdd.db");

$connexion->query('CREATE TABLE IF NOT EXISTS article (titre VARCHAR(20), contenu TEXT)');

// exécuter du SQL dans un fichier PHP !!




