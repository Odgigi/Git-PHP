<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark sticky-top">
        <nav class="navbar navbar-expand container navbar-dark mb-3">
            <span class="navbar-brand fs-3">
            🪐
            </span>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="http://localhost/php-initiation/blog/index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item"><a href="http://localhost/php-initiation/blog/index.php?page=contact" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="http://localhost/php-initiation/blog/index.php?page=login"class="nav-link">Connexion</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?php if(empty($_GET)) : ?>
            <!-- page d'accueil -->
            <?php require "data.php" ?> <!-- mise à disposition de la variable $articles pour la page d'accueil uniquement -->
            <?php require "vues/accueil.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "article") : ?>
            <!-- page article -->
            <?php require "vues/article.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "contact") : ?>
            <!-- page de contact -->
            <?php require "vues/contact.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "login") : ?>
            <!-- page login -->
            <?php require "vues/login.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "mentions") : ?>
            <!-- page mentions -->
            <?php require "vues/mentions.php" ?>
        <?php else : ?>
            <!-- page 404 -->
            <?php require "vues/404.php" ?>
        <?php endif ?>
    </div>

    <footer class="text-center position-absolute sticky-bottom">
        &copy; 2023 - <a href="http://localhost/php-initiation/blog/index.php?page=mentions">Mentions légales</a>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>