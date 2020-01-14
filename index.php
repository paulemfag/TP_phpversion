<?php include 'form_validation.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fill | Bienvenue</title>
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
    <!-- boutons inscription et connexion -->
    <div class="ml-auto">
        <p class="text-light" style="font-family: 'Odibee Sans', cursive; font-size: 20px;"><i>make it feel</i></p>
    </div>
    <div class="ml-auto">
        <button id="suscribebtn" class="btn btn-outline-primary my-2 my-sm-0">Inscription</button>
        <button id="connectbtn" class="btn btn-outline-success ml-1">Connexion</button>
    </div>
</nav>
<div id="presentationText">
    <p class="text-light">Crée en 2019 par Monsieur FAGOT, FILL est un site d'écoute et de publication musicale 
    développé dans l'optique d'offrir aux auteurs un endroit ou partager leur compositions " To fill " et au grand
    public de découvrir de nouveaux horizons " To feel ".<br>
    Les membres disposent également d'un espace Forum ou ils pourront débattre sur des sujets qui leurs tiennent à coeur.
    <p>
</div>
<div id="suscribeItems">
    <div class="container text-center bg-light mt-2 opacity">
        <h1 class="text-primary ml-auto mr-auto">Inscription :</h1>
    </div>
    <!-- form Inscription -->
    <form class="container" id="suscribers" method="post" action="#" novalidate>
            <p class="text-light col-12 text-center">Je suis : </p>
            <div class="form-group text-center">
                <input id="particular" type="radio" name="accounttype" value="1" <?= ($accounttype == 1) ? 'checked' : '' ?>>
                <label class="text-light" for="particular">un particulier</label>
                <input id="compositor" type="radio" name="accounttype" value="2" <?= ($accounttype == 2) ? 'checked' : '' ?>>
                <label class="text-light" for="compositor">un compositeur</label>
                <span class="text-danger text-center col-10"><?= ($errors['accounttype']) ?? '' ?></span>
            </div>
            <div class="form-group">
                <label class="text-light" for="suscribepseudo">Pseudo :</label>
                <span class="text-danger float-right"><?= ($errors['suscribepseudo']) ?? '' ?></span>
                <input id="suscribepseudo" name="suscribepseudo" class="col-12 text-center mt-1" type="text" placeholder="Pseudo" value="<?= $suscribepseudo ?>" required>
            </div>
            <div class="form-group">
                <label class="text-light" for="suscribemailbox">Adresse mail :</label>
                <span class="text-danger float-right"><?= ($errors['suscribemailbox']) ?? '' ?></span>
                <input id="suscribemailbox" name="suscribemailbox" class="col-12 text-center mt-1" type="email" placeholder="exemple@mail.com" value="<?= $suscribemailbox ?>" required>
            </div>
            <div class="form-group">
                <label class="text-light" for="suscribepassword">Mot de passe :</label>
                <span class="text-danger float-right"><?= ($errors['suscribepassword']) ?? '' ?></span>
                <input id="suscribepassword" name="suscribepassword" class="col-12 text-center mt-1" type="password" placeholder="*****" value="<?= $suscribepassword ?>" required>
            </div>
            <div class="form-group">
                <input id="suscribepasswordconfirmation" name="suscribepasswordconfirmation" class="col-12 text-center mt-1" type="password" placeholder="Confirmation du mot de passe" value="<?= $suscribepasswordconfirmation ?>" required>
            </div>
                <button id="suscribe" name="suscribe" class="btn btn-outline-primary col-12 text-center mt-1"
                        type="submit" value="<?= $suscribe ?? '' ?>">M'inscrire</button>
            <span class="text-success float-right"><?= ($errors['isok']) ?? '' ?></span>
    </form>
</div>
<div id="connectItems">
    <div class="container text-center bg-light mt-2 opacity">
        <h1 class="text-primary text-center ml-auto mr-auto">Connexion :</h1>
    </div>
        <!-- Form Connexion -->
        <form class="container" method="post" novalidate>
                <div class="form-group">
                <label class="text-light" for="pseudo">Pseudo :</label>
                <span class="text-danger float-right"><?= ($errors['pseudo']) ?? '' ?></span>
                <input id="pseudo" name="pseudo" class="col-12 text-center mt-1" type="text" placeholder="Pseudo" value="<?= $pseudo ?>" required>
                </div>
                <div class="form-group">
                <label class="text-light" for="mailbox">Adresse mail :</label>
                <span class="text-danger float-right"><?= ($errors['mailbox']) ?? '' ?></span>
                <input id="mailbox" name="mailbox" class="col-12 text-center mt-1" type="email" placeholder="Adrese mail" value="<?= $mailbox ?>" required>
                </div>
                <div class="form-group">
                <label class="text-light" for="password">Mot de passe :</label>
                <span class="text-danger float-right"><?= ($errors['password']) ?? '' ?></span>
                <input id="password" name="password" class="col-12 text-center mt-1" type="password" placeholder="Mot de passe" value="<?= $password ?>" required>
                </div>
                <div class="row col-12 ml-auto mr-auto">
                    <a id="noAccount" href="#">Je n'ai pas encore de compte</a>
                    <p class="text-primary"> | </p><a id="lostPassword" href="#">Mot de passe oublié</a>
                </div>
                <button id="login" name="login" class="btn btn-outline-primary col-12 text-center mt-1"
                        type="submit" value="<?= $login ?? '' ?>">Me connecter</button>
        </form>
    </div>
<form class="container" id='forgottenPassword' method="post" novalidate>
    <div class="container text-center bg-light mt-2 opacity">
        <h1 class="text-primary ml-auto mr-auto">Récupération du mot de passe :</h1>
    </div>
        <div class="form-group form-group-inline">
            <label class="text-light" for="recuperationMailbox">Adresse mail :</label>
            <span class="text-danger float-right"><?= ($errors['recuperationMailbox']) ?? '' ?></span>
            <input class="col-12" name="recuperationMailbox" type='text' value="<?= $recuperationMailbox ?>" required>
        </div>
     <span class="text-success float-right"><?= ($errors['isok']) ?? '' ?></span>
        <button id="recuperation" name="recuperation" class="btn btn-outline-success col-12 text-center mt-1" type="submit" value="<?= $recuperation ?? ''?>">Récupérer mon mot de passe</button>
</form>    
  <?php  include 'footer.php'; ?>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/home.js"></script>
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
