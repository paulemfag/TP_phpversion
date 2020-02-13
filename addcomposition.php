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
</body>
</html>
