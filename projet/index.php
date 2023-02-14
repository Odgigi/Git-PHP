<?php
session_start(); // prépare le terrain pour données formulaire + authentification
// ajouter nom de domaine du projet pour éviter de l'écrire à chaque fois
require "lib/base-de-donnee.php";
require "lib/const.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-exemple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header class="bg-success">
        <nav class="navbar navbar-expand navbar-dark container">
            <span class="navbar-brand">Blog</span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=presentation" class="nav-link">Présentation</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION["user"])) :?>
                    <li class="nav-item">
                        <a href="index.php?page=accueil&partie=privee" class="nav-link">Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=logout" class="nav-link">Déconnexion</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <a href="index.php?page=login" class="nav-link">Login</a>
                    </li>
                    <?php endif ?>
                </ul>
        </nav>
    </header>

    <!-- http://localhost/php-initiation/projet/index.php -->
    <div class="container">
        <!-- routing => url => page correspondante -->
        <!-- partie public -->
        <?php if (empty($_GET)) :?>
            <?php require "vues/public/accueil.php" ?>
            
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "presentation") :?>
            <?php require "vues/public/presentation.php" ?>
            
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "login") :?>
            <?php require "vues/public/login.php" ?>
            
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "mentions-legales") :?>
            <?php require "vues/public/mentions-legales.php" ?>

        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "logout") :?>
            <!-- gérer la déconnexion -->
            <?php unset($_SESSION["user"]);
            $_SESSION["message"] = [
                "alert" => "success",
                "info" => "Vous avez été déconnecté.e avec succès."
            ];
            header("Location: ". WWW . "?page=login");
            exit; ?> <!-- redirection et stop -->

        <!-- partie privee --> 
        <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && ($_GET["partie"]) === "privee") :?>
            <?php require "vues/privee/tableau-bord.php" ?>
            
        <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "user" && ($_GET["partie"]) === "privee") :?>
            <?php if(!empty($_GET["action"]) && $_GET["action"] == "add") :?>
                <?php require "vues/privee/gestion-user-form.php" ?>
            
        <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "delete") :?>

            <?php $sth = $connexion->prepare('
            DELETE FROM users WHERE id = :id');
            $sth->execute(["id" => $_GET["id"]]);
            header("Location: " . WWW . "?page=user&partie=privee");
            exit;
            ?>

        <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "update") :?>
            <?php $sth = $connexion->prepare('
            SELECT * FROM users WHERE id= :id');
            $sth->execute(["id" => $_GET["id"]]);
            $user = $sth->fetch();
            // var_dump($user);
            ?>
            <?php require "vues/privee/gestion-user-form.php" ?>

            <?php else :?>
                <?php require "vues/privee/gestion-user.php" ?>
            <?php endif ?>

        <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "page" && ($_GET["partie"]) === "privee") :?>

            <!-- gérer le CRUD des pages ajout -->
        <?php if(!empty($_GET["action"]) && $_GET["action"] == "add") :?>
                <?php require "vues/privee/gestion-page-form.php" ?>
            <!-- suppression -->
        <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "delete") :?>
            <?php $sth = $connexion->prepare('
            DELETE FROM pages WHERE id = :id');
            $sth->execute(["id" => $_GET["id"]]);
            header("Location: " . WWW . "?page=page&partie=privee");
            exit;
            ?>
            <!-- modifier -->
        <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "update") :?>
            <?php $sth = $connexion->prepare('
            SELECT * FROM pages WHERE id= :id');
            $sth->execute(["id" => $_GET["id"]]);
            $page = $sth->fetch();
            // var_dump($page);
            ?>
            <?php require "vues/privee/gestion-page-form.php" ?>
        <?php  else :?>
            <?php require "vues/privee/gestion-page.php" ?>
        <?php endif ?>
        <!-- sinon -->
            <?php else :?>
                <?php require "vues/public/404.php" ?>
        <?php endif ?>
    </div>

<footer class="text-center position-bottom-sticky">
    &copy; 2023 - <a href="<?php echo WWW ?>?page=mentions">Mentions légales</a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>