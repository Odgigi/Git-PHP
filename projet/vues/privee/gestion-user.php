<h1>Gestion des utilisateurs</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php"; ?>
    </div>
    <div class="col">
        <div class="text-end mb-3">
            <a href="<?php echo WWW ?>?page=user&partie=privee&action=add" class="btn btn-primary">Ajouter un nouveau profil</a>
        
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>nom</td>
                    <td>email</td>
                    <td>date création</td>
                    <td>status</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alain</td>
                    <td>alain@yahoo.fr</td>
                    <td>10/02/2023</td>
                    <td>actif</td>
                    <td>
                        <a href="" class="btn btn-warning me-2">modifier</a>
                        <a href="" class="btn btn-danger">supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>