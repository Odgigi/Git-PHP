<!-- <?php
session_start();
$titre = "Connectez-vous";
echo "<h1>$titre</h1>";
?> -->
<h1>Connexion au back-office</h1>
    <form action="traitement-blog" method= "POST">
        <div class="row my-5">
            <div class="col-3 offset-3">
                <input type="text" name="login" class="form-control" required placeholder="saisir votre login">
            </div>
            <div class="col-3">
                <input type="password" name="password" class="form-control" placeholder="saisir votre password"></input>
            </div>
            <div class="col-12 text-center mt-4">
                <input type="submit" class="btn btn-outline-warning">
            </div>
        </div>
    </form>
