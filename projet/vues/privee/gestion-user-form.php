<h1>Ajouter un nouveau profil user</h1>

<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php"; ?>
    </div>
    <div class="col">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom">saisir le nom</label>
                <input type="text" id="nom" name= "nom" placeholder="le nom" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">saisir l'email'</label>
                <input type="email" id="nom" email= "nom" placeholder="votre@email.fr" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password">saisir le password</label>
                <input type="text" id="password" name= "password" placeholder="votre password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="actif">
                    <input type="checkbox" name= "actif" placeholder="statut user" >status
                </label>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
        <?php require "lib/message-flash.php" ?>
    </div>
</section>