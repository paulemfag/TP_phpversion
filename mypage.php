<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FILL | Ma page</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navbar bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <img src="../assets/img/keyboards.png" alt="logo_clavier" height="40" width="60">
    <a class="navbar-brand text-light"><b>FILL</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownPlaylist" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Playlists
                </a>
                <div class="dropdown-menu" style="background-color: #727d87;" aria-labelledby="navbarDropdownPlaylist">
                    <a class="dropdown-item" data-toggle="modal" data-target=".modal"><i class="fas fa-plus"></i> Nouvelle playlist</a>
                    <a class="dropdown-item" data-toggle="modal" data-target=".modal">Ma playlist</a>
                </div>
            </li>
            <!-- Menu Tags -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownTags" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tags
                </a>
                <div class="dropdown-menu" style="background-color: #727d87;" aria-labelledby="navbarDropdownTags">
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
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" style="background-color: #727d87;" aria-labelledby="navbarDropdownMenu">
                    <a class="dropdown-item" href="parameters.php">Paramètres</a>
                    <a class="dropdown-item" href="#">CGU</a>
                    <a class="dropdown-item text-danger" href="index.php">Me déconnecter <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </li>
            <li>
                <a class="btn btn-light text-dark"  href="forum.php" role="button">Forum</a>
            </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
     </form> -->
    </div>
</nav>
      <!-- <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
   </form> -->
  <!-- container -->
  <div class="container bg-light mt-2 opacity">
    <i class="far fa-id-badge"></i>
    <h1 class="text-right text-info">Pseudo</h1>
  </div>
  <!-- container -->
  <div class="container bg-light opacity">
    <div class="row">
      <div class="col-12">
        <a><i class="fas fa-music"></i><b> Dernières compositions :</b></a>
      </div>
    </div>
  </div>
  <div class="col-12">
    <h1 class="text-center bg-light col-10 opacity mt-2 ml-auto mr-auto" style="color: #113E7F;"><b>Informations personnelles :</b></h1>
  </div>
  <!-- container -->
  <div class="container bg-light opacity">
    <div class="row">
      <div class="col-12">
        <p><i class="fas fa-address-card"></i><b> Biographie :</b><br><br></p>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <p><i class="fas fa-drum"></i><b> Instruments :</b><br><br></p>
      </div>
      <div class="col-6">
        <p><i class="fas fa-compact-disc"></i><b> Logiciels :</b><br><br></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a><i class="fas fa-network-wired"></i><b> Réseaux :</b></a>
        <a href="#"><img src="../assets/img/facebook-logo.png" width="80" height="60" alt="logo_fb"></a>
        <a href="#"><img src="../assets/img/logo_twitter.png" width="80" height="60" alt="logo_fb"></a>
      </div>
    </div>
  </div>
  <footer class="page-footer font-small text-light bg-secondary">
    <!-- logos hrefs -->
    <div class="container-fluid text-center text-md-center">
      <a href="https://www.facebook.com"><img src="../assets/img/facebook-logo.png" width="40" height="30" alt="logo_fb"></a>
      <a href="https://www.twitter.com"><img src="../assets/img/logo_twitter.png" alt="logo_twitter" height="20" width="25"></a>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-1"><img src="../assets/img/keyboards.png" alt="logo_clavier" height="30" width="50">
      FILL 2019</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>
