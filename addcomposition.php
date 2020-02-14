<?php
require_once 'form_validation.php';
$title = 'Fill | Ajout Composition';
require_once 'header.php';
?>
<div class="container bg-light mt-2 opacity">
    <h1 class="text-center ml-auto mr-auto">Ajouter une composition :</h1>
</div>
<form class="container" method="post" action="#" novalidate>
    <div class="form-group">
        <label class="text-light" for="file">Veuillez ajouter un fichier :</label>
        <span class="text-danger float-right"><?= $errors['file'] ?? '' ?></span>
        <input id="file" class="bg-secondary text-light col-12" type="file" name="file" accept="audio/*">
    </div>
    <div class="form-group">
        <label class="text-light" for="compositionName">Nom de la composition :</label>
        <span class="text-danger float-right"><?= $errors['compositionName'] ?? '' ?></span>
        <input id="compositionName" class="col-12" name="compositionName" type="text" value="<?= $_POST['compositionName'] ?? '' ?>">
    </div>
    <div class="form-group">
        <label class="text-light" for="instruments">Instruments employés : ( facultatif )</label>
        <span class="text-danger float-right"><?= $errors['instruments'] ?? '' ?></span>
        <input id="instruments" class="col-12" name="instruments" type="text" value="<?= $_POST['instruments'] ?? '' ?>">
    </div>
    <div class="form-group">
        <label class="text-light" for="chords">Accords employés : ( facultatif )</label>
        <span></span>
        <input id="chords" class="col-12" name="chords" type="text" value="<?= $_POST['chords'] ?? '' ?>">
    </div>
    <input name="newComposition" class="btn btn-success col-12" value="Ajouter la comosition" type="submit">
</form>
<?php require_once 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
