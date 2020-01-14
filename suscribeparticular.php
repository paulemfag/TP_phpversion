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
        </nav>
        <div class="container text-center bg-light mt-2 opacity">
            <h1 class="text-primary ml-auto mr-auto">Informations personnelles :</h1>
        </div>
        <div>
            <form>
                <div class="container">
                    <p class="text-light mt-2"><i class="fas fa-music"></i> Styles préférés (Maximum 5 ) :</p>
                    <div id="instruments" class="bg-secondary">
                        <form action="#" method="get">
                            <select name="tags" id="tags">
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
                    <div class="col-12 ml-auto mt-2 ml-1">
                        <button href="accueil.php" class="btn btn-outline-secondary col-5 text-center" type="submit">Ignorer
                            pour le moment
                        </button>
                        <button class="btn btn-outline-success col-5 text-center" type="submit">Valider mes informations
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <?php include 'footer.php'; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
</html>
