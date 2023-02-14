<?php
$sth = $connexion->prepare('
SELECT * FROM pages WHERE slug = :slug');
$sth->execute(["slug" => "accueil"]);
$accueil = $sth->fetch();
?>
<?php if($accueil) : ?>
<h1><?php echo $accueil["titre"] ?></h1>
<img src="<?php echo $accueil["image"] ?>" alt="">
<div>
    <?php echo $accueil["contenu"] ?>
</div>
<?php else : ?>
    <p class="mt-5">Veuillez créer la page dans le back-office avec le slug "accueil"</p>
<?php endif ?>