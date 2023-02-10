<?php
$sth = $connexion->prepare('SELECT id, nom, email, DATE_FORMAT(dt_creation, "%d/%m/%Y") AS `dt_creation`, (CASE status WHEN 1 THEN "actif" ELSE "inactif" END) AS `status` FROM users');
$sth->execute();
$resultat = $sth->fetchAll();
// var_dump($resultat);
?>
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
                <?php foreach($resultat as $user) : ?>
                <tr>
                    <!-- htmlentities() fonction de sécurité pour éviter les injections de code -->
                    <td><?php echo htmlentities($user["id"]) ?></td>
                    <td><?php echo htmlentities($user["nom"]) ?></td>
                    <td><?php echo htmlentities($user["email"]) ?></td>
                    <td><?php echo htmlentities($user["dt_creation"]) ?></td>
                    <td><?php echo htmlentities($user["status"]) ?></td>
                    <td>
                        <a href="<?php echo WWW ?>?page=user&partie=privee&action=update&id= <?php echo htmlentities($user["id"]) ?>" class="btn btn-warning me-2">modifier</a>
                        <a href="<?php echo WWW ?>?page=user&partie=privee&action=delete&id= <?php echo htmlentities($user["id"]) ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûr.e de vouloir supprimer ce profil ?')">supprimer</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>

<!-- <script>
    const suppr = document.querySelectorAll(" .btn-danger")
    for(let i = 0; i < suppr.length; i++){
        suppr[i].addEventListener("click", function(e){
            const validation = confirm();

        })
    }
</script> -->