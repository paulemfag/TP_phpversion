<?php $title = 'Fill | Paramètres';
include 'header.php'; 
?>
        <div class="container text-center bg-light mt-2 opacity">
            <h1 class="text-center ml-auto mr-auto">Paramètres :</h1>
        </div>
        <form class="container" action="#" method="post" novalidate>
            <div class="form-group">
                <label class="text-light" for="actualPassword">Mot de passe actuel :</label>
                <span class="text-danger error_message"><?= ($errors['actualPassword']) ?? '' ?></span>
                <input class="col-12" name="actualPassword" type="password" value="<?= $actualPassword ?>" required>
            </div>
            <div class="form-group">
                <label class="text-light" for="newPassword">Nouveau mot de passe :</label>
                <span class="text-danger error_message"><?= ($errors['newPassword']) ?? '' ?></span>
                <input class="col-12" name="newPassword" type="password" value="<?= $newPassword ?>" required>
            </div>
            <div class="form-group">
                <label class="text-light" for="newPasswordConfirm">Confirmation du nouveau mot de passe :</label>
                <span class="text-danger error_message"><?= ($errors['newPasswordConfirm']) ?? '' ?></span>
                <input class="col-12" name="newPasswordConfirm" type="password" value="<?= $newPasswordConfirm ?>" required>
            </div>
            <input name="changeMyPassword" type="submit" value="Changer mon mot de passe">
        </form>
  <?php  include 'footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
</html>
