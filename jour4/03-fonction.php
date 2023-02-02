<?php

declare(strict_types=1);

function genererArticle (array $article) : string{
    return "
    <article class='card'>
        <h2 class='card-header'>{$article["titre"]}</h2>
        <img src='{$article["img"]}' alt=''>
        <p> {$article["contenu"]}</p>
        <a href='http://localhost/php-initiation/jour4/03-index.php?id={$article["id"]}'>Lire la suite</a>
    </article>
    ";
}