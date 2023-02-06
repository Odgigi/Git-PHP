<h1>Bienvenue sur mon blog !</h1>

<div class="row">

<?php foreach($articles as $a) :?>
    <article class="col-3">
        <h2><?php echo $a["titre"] ?></h2>
        <img src="<?php echo $a["img"] ?>" alt="" class="img-fluid">
        <p><?php echo $a["contenu"] ?></p>
    </article>
    <?php endforeach ?>)
</div>