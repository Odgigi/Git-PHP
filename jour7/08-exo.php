<?php

$connexion = new PDO("sqlite:./06-bdd.db");

$connexion->query('INSERT INTO auteur (prenom, nom, status, dt_creation) VALUES ("Victor", "Hugo", TRUE, "2023-01-01"), ("George", "Sand", TRUE, "2023-02-01"), ("Jean-Jacques", "Rousseau", FALSE, "2012-01-15"), ("Arthur", "Rimbaud", TRUE, "2023-01-01")');

// j'ai galéré un max avec les single/double quotes entre celles qui entourent la query et celles des values => apparemment il faut les utiliser alternativement et non simultanément !!! (elles se marchent sur les pieds ???)

// créer un nouveau fichier 08-exo.php
// vous connectez à la base 06-bdd.db

// insérer 4 lignes dans la table auteur
// Victor Hugo actif 01/01/2023
// George Sand actif 01/02/2023
// Jean Jacques Rousseau inactif 15/01/2012
// Arthur Rimbaud actif 01/01/2023
