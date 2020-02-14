<?php require_once 'form_validation.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fill | Inscription</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CDN font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- CDN google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navbar bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary col-12">
    <img src="../assets/img/keyboards.png" alt="logo_clavier" height="40" width="60">
    <a id="FILL" class="navbar-brand text-light" style="font-weight: bold;">FILL</a>
</nav>
<div class="container text-center bg-light mt-2 opacity">
    <h1 class="text-primary ml-auto mr-auto">Informations personnelles :</h1>
</div>
<div class="text-center">
    <p class="text-light">Type de compte :</p>
    <input id="particular" type="radio" name="accounttype" value="1" <?= ($accounttype == 1) ? 'checked' : '' ?>>
    <label class="text-light" for="particular">Particulier</label>
    <input id="compositor" type="radio" name="accounttype" value="2" <?= ($accounttype == 2) ? 'checked' : '' ?>>
    <label class="text-light" for="compositor">Compositeur</label>
    <span class="text-danger text-center col-10"><?= ($errors['accounttype']) ?? '' ?></span>
</div>
<div id="compositorItems">
    <form class="container" action="#" method="post">
        <div class="form-group">
            <label class="text-light" for="biography"><i class="fas fa-address-card"></i> Biographie :</label>
            <input id="biography" class="col-12 text-center mt-1" type="text"
                   placeholder="Quelques mots sur vous, votre parcous, vos inspirations">
        </div>
        <div class="form-group">
            <label class="text-light" for="instruments"><i class="fas fa-drum"></i> Instruments :</label>
            <span class="text-dange float-right">test</span>
            <input id="instruments" class="col-12" name="instruments" type="text">
        </div>
        <div class="form-group">
            <label class="text-light" for="tagsCompositor"><i class="fas fa-music"></i> Styles préférées ( Max 5 ):</label>
            <div class="bg-secondary">
                <select name="tags" id="tagsCompositor">
                    <option value="Afro">Afro</option>
                    <option value="Blues">Blues</option>
                    <option value="Classique">Classique</option>
                    <option value="Disco">Disco</option>
                    <option value="Electro">Electro</option>
                    <option value="Funk">Funk</option>
                    <option value="Gospe">Gospel</option>
                    <option value="Kompa">Kompa</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="Punk">Punk</option>
                    <option value="Raï">Raï</option>
                    <option value="Rap">Rap</option>
                    <option value="Reggae">Reggae</option>
                    <option value="R'n'B">R'n'B</option>
                    <option value="Rock">Rock</option>
                </select>
                <button name="tagsbtn">Ajouter un style</button>
            </div>
            <div class="form-group">
                <input class="btn btn-outline-secondary col-5 text-center" type="submit">
                <a href="accueil.php" class="btn btn-outline-secondary col-5 text-center">Ignorer
                    pour le moment
                </a>
                <button name="submitSuscribeCompositor" class="btn btn-outline-success col-5 text-center"
                        type="submit">Valider mes
                    informations
                </button>
            </div>
        </div>
    </form>
</div>
<div class="container" id="particularItems">
    <div id="styles" class="bg-secondary">
        <form action="#" method="post">
            <label class="text-light" for="tagsParticular"><i class="fas fa-music"></i> Styles préférées ( Max 5 ):</label>
            <select name="tags" id="tagsParticular">
                <option value="Afro">Afro</option>
                <option value="Blues">Blues</option>
                <option value="Classique">Classique</option>
                <option value="Disco">Disco</option>
                <option value="Electro">Electro</option>
                <option value="Funk">Funk</option>
                <option value="Gospe">Gospel</option>
                <option value="Kompa">Kompa</option>
                <option value="Metal">Metal</option>
                <option value="Pop">Pop</option>
                <option value="Punk">Punk</option>
                <option value="Raï">Raï</option>
                <option value="Rap">Rap</option>
                <option value="Reggae">Reggae</option>
                <option value="R'n'B">R'n'B</option>
                <option value="Rock">Rock</option>
            </select>
            <button name="tagsbtn">Ajouter un style</button>
        </form>
    </div>
    <div class="col-12 ml-auto mt-2">
        <a href="accueil.php" class="btn btn-outline-secondary col-5 text-center">Ignorer
            pour le moment
        </a>
        <button name="submitSuscribeParticular" class="btn btn-outline-success col-5 text-center" type="submit">Valider
            mes informations
        </button>
    </div>
</div>
<?php require_once 'footer.php'; ?>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/suscribe.js"></script>
</body>
</html>