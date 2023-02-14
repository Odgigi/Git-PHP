<?php require "lib/functions.php";
isLogged();
if(isset($page)) :?>
<h1 class="mb-4">Modifier la page</h1>
<?php else :?>
  <h1>Ajouter une page</h1>
<?php endif ?>
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
{# <script>
      $('textarea#tiny').tinymce({
        height: 200,
        menubar: false,
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });
    </script> #}
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

<section class="row">
  <div class="col-3">
      <?php require "lib/menu-privee.php"; ?>
  </div>
  <div class="col">

    <form action="lib/traitement-page.php" method="POST">
      <div class="mb-3">
        <label for="titre">Saisir le titre</label>
        <input type="text" name="titre" id="titre" class="form-control" placeholder="saisir le titre" value="<?php echo isset($page) ? $page["titre"] : "" ?>">
      </div>
      <div>
        <label for="slug">Saisir le slug</label>
        <input type="text" name="slug" id="slug" class="form-control" placeholder="saisir le slug" value="<?php echo isset($page) ? $page["slug"] : "" ?>">
      </div>
      <div>
        <label for="contenu">Saisir/insérer le contenu</label>
        <textarea name="contenu" id="mytextarea" class="form-control" placeholder="saisir le contenu" value="<?php echo isset($page) ? $page["contenu"] : "" ?>"></textarea>
      </div>
      <div>
        <label for="image">Insérer une image</label>
        <input type="url" name="image" id="image" class="form-control" placeholder="url de l'image" value="<?php echo isset($page) ? $page["image"] : "" ?>">
      </div>
      <div>
        <label for="auteur">Saisir l'auteur</label>
        <input type="text" name="auteur" id="auteur" class="form-control" placeholder="saisir l'auteur" value="<?php echo isset($page) ? $page["auteur"] : "" ?>">
      </div>
      
      <?php if(isset($page)) : ?>
                <!-- champ qui permet de distinguer entre INSERT et UPDATE -->
                <input type="hidden" name="id" value="<?php echo $page["id"] ?>">
            <?php endif ?>
      <div>
        <input type="submit" class="btn btn-success">
      </div>
      
    </form>

    <?php require "lib/message-flash.php" ?>
  </div>
</section>