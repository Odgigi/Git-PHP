<?php 
require "lib/functions.php";
isLogged();
if(isset($user)) :?>
<h1 class="mb-4">Mettre à jour un profil user</h1>
<?php else :?>
    <h1 class="mb-4">Ajouter un nouveau profil user</h1>
<?php endif ?>

<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php"; ?>
    </div>
    <div class="col">
        <form action="lib/traitement-user.php" method="POST">
            <div class="mb-3">
                <label for="nom">saisir le nom</label>
                <input type="text" id="nom" name="nom" placeholder="le nom" class="form-control" value="<?php echo isset($user) ? $user["nom"] : "" ?>">
            </div>
            <div class="mb-3">
                <label for="email">saisir l'email</label>
                <input type="email" id="nom" name="email" placeholder="votre@email.fr" class="form-control" value="<?php echo isset($user) ? $user["email"] : "" ?>">
            </div>
            <div class="mb-3">
                <?php if(isset($user)) : ?>
                    <label for="password">Laisser le champ password vide si vous ne voulez pas le modifier</label>
                    <?php else :?>
                        <label for="password">saisir le password</label>
                <?php endif ?>
                <input type="text" id="password" name="password" placeholder="votre password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="actif">
                    <input type="checkbox" name="actif" <?php echo isset($user) && $user["status"] == 1 ? "checked" : "" ?>> status
                </label>
            </div>
            <?php if(isset($user)) : ?>
                <!-- champ qui permet de distinguer entre INSERT et UPDATE -->
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
            <?php endif ?>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
        <?php require "lib/message-flash.php" ?>
    </div>
</section>