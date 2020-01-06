<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bienvenue sur Fill !</title>
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
    <a class="navbar-brand text-light" data-toggle="modal" data-target="#presentation"
       style="font-weight: bold;">FILL</a>
    <!-- boutons inscription et connexion -->
    <div class="ml-auto">
        <p class="text-light" style="font-family: 'Odibee Sans', cursive; font-size: 20px;"><i>make it feel</i></p>
    </div>
    <div class="ml-auto">
        <button id="suscribebtn" class="btn btn-outline-primary my-2 my-sm-0">Inscription</button>
        <button id="connectbtn" class="btn btn-outline-success ml-1">Connexion</button>
    </div>
</nav>
<p class="text-light">Crée en 2019 par Monsieur FAGOT FILL est un site d'écoute et de publication musicale développé
    d</p>
<div id="suscribeItems">
    <div class="container text-center bg-light mt-2 opacity">
        <h1 class="text-primary ml-auto mr-auto">Inscription :</h1>
    </div>
    <?php
    if (isset($_POST['type'])
        && preg_match('/^[A-Z|a-zéèçàïîêëôöûü]+([A-Z|a-z_éèçàïîêëôöûü_ _-])*$/', $_POST['lastname'])
        && preg_match('/^[A-Z|a-zéèçàïîêëôöûü]+([A-Z|a-z_éèçàïîêëôöûü_ _-])*$/', $_POST['firstname'])
        && preg_match('/^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/', $_POST['mailbox'])) {
        echo 'test';
    }
    ?>
    <!-- form Inscription -->
    <form id="suscribers">
        <div class="container">
            <div class="col-12 text-center">
                <a class="text-light col-12 text-center">Je suis : </a>
                <input id="compositor" type="radio" name="type" value="compositor">
                <label class="text-light" for="compositor">un compositeur</label>
                <input id="particular" type="radio" name="type" value="particular">
                <label class="text-light" for="particular">un particulier</label>
            </div>
            <label class="text-light" for="lastName">Nom :</label>
            <input id="lastName" class="col-12 text-center mt-1" type="text" placeholder="Nom" required>
            <label class="text-light" for="firstName">Prénom :</label>
            <input id="firstName" class="col-12 text-center mt-1" type="text" placeholder="Prénom" required>
            <label class="text-light" for="suscribepseudo">Pseudo :</label>
            <input id="suscribepseudo" class="col-12 text-center mt-1" type="text" placeholder="Pseudo" required
                   maxlength="15">
            <label class="text-light" for="suscribemailbox">Adresse mail :</label>
            <input id="suscribemailbox" class="col-12 text-center mt-1" type="email" placeholder="Adresse mail"
                   required>
            <label class="text-light col-2" for="suscribepassword">Mot de passe :</label>
            <input id="suscribepassword" class="col-4 text-center mt-1" type="password" placeholder="Mot de passe"
                   required>
            <input id="suscribepasswordconfirmation" class="col-4 text-center mt-1 ml-2" type="password"
                   placeholder="Confirmation du mot de passe" required>
            <button id="suscribe" class="btn btn-outline-primary col-12 text-center mt-1" value="M'inscrire"
                    type="submit"><b>M'inscrire</b></button>
        </div>
    </form>
</div>
<div id="connectItems">
    <div class="container text-center bg-light mt-2 opacity">
        <h1 class="text-primary text-center ml-auto mr-auto">Connexion :</h1>
    </div>
    <div id="connect">
        <!-- Form Connexion -->
        <form>
            <div class="container">
                <label class="text-light" for="pseudo">Pseudo :</label>
                <input id="pseudo" class="col-12 text-center mt-1" type="text" placeholder="Pseudo" required
                       maxlength="15">
                <label class="text-light" for="mailbox">Adresse mail :</label>
                <input id="mailbox" class="col-12 text-center mt-1" type="email" placeholder="Adrese mail" required>
                <label class="text-light" for="password">Mot de passe :</label>
                <input id="password" class="col-12 text-center mt-1" type="password" placeholder="Mot de passe"
                       required>
                <div class="row col-12 ml-auto mr-auto">
                    <a id="noAccount" href="#">je n'ai pas encore de compte</a>
                    <p class="text-primary"> | </p><a href="#">Mot de passe oublié</a>
                </div>
                <input id="login" value="Me connecter" class="btn btn-outline-primary col-12 text-center mt-1"
                       type="submit">
            </div>
        </form>
    </div>
</div>
<footer class="page-footer font-small text-light bg-secondary">
    <!-- logos hrefs -->
    <div class="container-fluid text-center text-md-center">
        <a href="https://www.facebook.com"><img src="../assets/img/facebook-logo.png" width="40" height="30"
                                                alt="logo_fb"></a>
        <a href="https://www.twitter.com"><img src="../assets/img/logo_twitter.png" alt="logo_twitter" height="20"
                                               width="25"></a>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-1">
        <img src="../assets/img/keyboards.png" alt="logo_clavier" height="30" width="50">
        FILL 2019
    </div>
</footer>
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
