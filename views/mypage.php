<?php
$title = 'Fill | Ma page';
require_once 'require/header.php';
?>
<!-- container -->
<div class="container bg-light mt-2 opacity">
    <i class="far fa-id-badge"></i>
    <p class="text-right text-info"><?= $_SESSION['pseudo']. $_SESSION['id'] ?></p>
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
    <h1 class="text-center bg-light col-10 opacity mt-2 ml-auto mr-auto">Informations personnelles :</h1>
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
<div class="container">
    <a title="ajouter une composition" class="btn btn-block btn-success" href="addcomposition.php"></a>
</div>
<?php require_once 'require/footer.php'; ?>
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
