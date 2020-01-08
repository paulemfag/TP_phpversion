<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FILL | Forum</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <!-- CDN Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- CDN font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
  <!-- Navbar -->
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
  <!-- barre et bouton rechercher -->
  <div class="container mt-2 12-col">
    <div class="row" style="justify-content: center;">
      <input  class="col-5" type="search" placeholder="Rechercher">
      <button class="btn btn-outline-primary my-2 my-sm-0 ml-2 col-2" type="submit">Rechercher</button>
      <button class="btn btn-outline-success ml-1 col-3" type="button" data-toggle="modal" data-target=".modal"><i class="fas fa-plus"></i> Nouveau</button>
    </div>
  </div>
  <!-- Modal nouveau topic -->
  <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: #BD5C44;">
        <div class="modal-header">
          <h5 class="modal-title text-light">Créer un nouveau topic :</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label style="justify-content: center;">Sujet :</label>
          <div class="row col-12" style="justify-content: center;">
            <input type="text" placeholder="Sujet">
          </div>
          <label style="justify-content: center;">Description : </label>
          <div class="row col-12 " style="justify-content: center;">
            <input type="text" placeholder="Description">
          </div>
          <label style="justify-content: center;">Votre message :</label>
          <div id="big_text" class="row col-12  mb-2" style="justify-content: center;">
            <input type="text" placeholder="premier message">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Créer</button>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times"></i> Annuler</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tableau -->
  <div class="container col-12">
  <div class="row col-12" style="justify-content: center">
  <table class="table table-border table-striped table-sm bg-info mt-2 col-10">
      <thead class="text-light">
        <tr>
          <th>Sujet :</th>
          <th>Createur :</th>
          <th>Description :</th>
          <th>Date de dernière modification :</th>
          <th>Date de publication :</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td>Aide pour compo</td>
        <td>Paulemfag</td>
        <td>je veux faire ça mais ça marche pas bien donc</td>
        <td>20/11/2019</td>
        <td>20/11/2019</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
  <!-- bouton réglement -->
  <div class="container col-12">
    <div class="row" style="justify-content: center;">
      <button type="button" class="btn btn-outline-danger col-10" data-toggle="modal" data-target="#rules"><i class="fas fa-list-ol"></i> Réglement</button>
    </div>
  </div>
  <!-- Modal réglement -->
  <div class="modal fade connexion" id="rules" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #BD5C44;">
        <div class="modal-header">
          <h4 class="modal-title"><i class="fas fa-book"></i> Réglement du Forum :</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p>
            Ce forum est modéré a posteriori, les messages que vous postez sont directement publiés  sans aucun contrôle
            préalable. Il est de votre responsabilité de veiller à ce que vos contributions ne portent pas préjudice à autrui et soient
            conforment à la réglementation en vigueur. Les organisateurs du forum et les modérateurs se réservent le droit de
            retirer toute contribution qu’ils estimeraient déplacée, inappropriée, contraire aux lois et règlements, à cette charte
            d’utilisation ou susceptible de porter préjudice directement ou non à des tiers.
            <br><br>
            Les messages qui ne sont pas en relation avec les thèmes de discussion ou avec l’objet du forum peuvent être
            supprimés sans préavis par les modérateurs. Seront aussi supprimées, sans préjudice d'éventuelles poursuites
            disciplinaires ou judiciaires, les contributions qui :
            <br><br>
            1. incitent à la discrimination fondée sur la race, le sexe, la religion, à la haine, à la violence, au racisme ou au révisionnisme
            <br><br>
            2. incitent à la commission de délits
            <br><br>
            3. sont contraire à l'ordre public et aux bonnes mœurs,
            <br><br>
            4. font l’apologie des crimes ou délits et particulièrement du meurtre, viol, des crimes de guerre et crimes contre l'humanité,
            <br><br>
            5. ont un caractère injurieux, diffamatoire, insultant ou grossier
            <br><br>
            6. portent manifestement atteinte aux droits d’autrui et particulièrement ceux qui portent atteinte à l'honneur ou à la réputation d'autrui,
            <br><br>
            7. sont liés à un intérêt manifestement commercial ou ont un but promotionnel sans objet avec le forum.
            <br><br>
            L’utilisation d’un pseudonyme ne rend pas anonyme, conformément à la législation les prestataires techniques sont
            tenus de conserver et de déférer à l’autorité judiciaire les informations de connections (log, IP, date/heure) permettant
            la poursuite de l’auteur d’une infraction. Toutes les informations nécessaires seront donc conservées pour la durée
            légale prévue. Elles seront détruites au terme du délai légal de conservation.
            <br><br>
            Les organisateurs du forum se réservent le droit d’exclure du forum, de façon temporaire ou définitive, toute personne
            dont les contributions sont en contradiction avec les règles mentionnées dans le présent document. Les organisateurs
            pourront transmettre aux autorités de police ou de justice toutes les pièces ou documents postés sur le forum s’ils
            estiment de leur devoir d’informer les autorités compétentes ou que la législation leur en fait obligation.
          </p>
        </div>
        <div class="modal-footer">
          <div class="checkbox">
            <label>
              <input class="check_list" name="check_list[]" type="checkbox" id="check">
              J'ai pris connaisance du réglement
            </label>
          </div>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times"></i> Fermer</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- Pagination -->
  <nav aria-label="Page navigation example">
  <ul class="pagination mt-2" style="opacity: 0.6; justify-content: center;">
  <!-- Bouton Previous à mettre que sur les autres pages -->
  <li class="page-item"><a class="page-link" href="#">page précédente</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
<!-- Footer -->
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
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/forum.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
