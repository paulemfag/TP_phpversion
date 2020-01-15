<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <!-- CDN Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- CDN font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!-- CDN google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <img src="../assets/img/keyboards.png" alt="logo_clavier" height="40" width="60">
            <a class="navbar-brand text-light"><b>FILL</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="accueil.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="mypage.php">Ma page</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownPlaylist" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Playlists
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPlaylist">
                            <a class="dropdown-item" data-toggle="modal" data-target=".modal"><i class="fas fa-plus"></i>
                                Nouvelle playlist</a>
                            <a class="dropdown-item" data-toggle="modal" data-target=".modal">Ma playlist</a>
                        </div>
                    </li>
                    <!-- Menu Tags -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownTags" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tags
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownTags">
                            <a class="dropdown-item" href="#">Afro</a>
                            <a class="dropdown-item" href="#">Blues</a>
                            <a class="dropdown-item" href="#">Classique</a>
                            <a class="dropdown-item" href="#">Disco</a>
                            <a class="dropdown-item" href="#">Electro</a>
                            <a class="dropdown-item" href="#">Funk</a>
                            <a class="dropdown-item" href="#">Gospel</a>
                            <a class="dropdown-item" href="#">Kompa</a>
                            <a class="dropdown-item" href="#">Metal</a>
                            <a class="dropdown-item" href="#">Pop</a>
                            <a class="dropdown-item" href="#">Punk</a>
                            <a class="dropdown-item" href="#">Raï</a>
                            <a class="dropdown-item" href="#">Rap</a>
                            <a class="dropdown-item" href="#">Reggae</a>
                            <a class="dropdown-item" href="#">R'n'B</a>
                            <a class="dropdown-item" href="#">Rock</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenu" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                            <a class="dropdown-item" href="parameters.php">Paramètres</a>
                            <a class="dropdown-item" href="#">CGU</a>
                            <a class="dropdown-item text-danger" href="index.php">Me déconnecter <i
                                    class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </li>
                    <li>
                        <a class="btn btn-light text-dark" href="forum.php" role="button">Forum</a>
                    </li>
                </ul>
            </div>
        </nav>