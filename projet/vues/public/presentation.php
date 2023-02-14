<?php
$sth = $connexion->prepare('
SELECT * FROM pages WHERE slug = :slug');
$sth->execute(["slug" => "presentation"]);
$presentation = $sth->fetch();
?>
<?php if($presentation) : ?>
<h1><?php echo $presentation["titre"] ?></h1>
<img src="<?php echo $presentation["image"] ?>" alt="" class="img-fluid">
<div>
    <?php echo $presentation["contenu"] ?>
</div>
<?php else : ?>
    <p class="mt-5">Veuillez créer la page dans le back-office avec le slug "presentation"</p>
<?php endif ?>