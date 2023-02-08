<?php

$connexion = new PDO("sqlite:./06-bdd.db");

$connexion->query("CREATE TABLE IF NOT EXISTS auteur (id INTEGER PRIMARY KEY AUTOINCREMENT, prenom VARCHAR(200), nom VARCHAR(200), status BOOLEAN, dt_creation DATE)");

// (strftime("date", '%Y/%m/%d'));