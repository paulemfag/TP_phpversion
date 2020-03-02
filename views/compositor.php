<?php
require_once '../controllers/sqlcompositor.php';
require_once 'require/header.php';
?>
<div id="scroll" class="mb-2">
    <div class="col-12">
        <h1 class="text-center bg-light col-10 opacity mt-2 ml-auto mr-auto"><?= $pseudo ?> | Informations personnelles
            :</h1>
    </div>
    <?= $personalInformations ?? '<h2 class="text-light text-center">Ce compositeur n\'as pas encore renseigné d\'informations sur lui.</h2>' ?>
    <!-- container -->
    <div class="container bg-light opacity">
        <div class="row">
            <div class="col-12">
                <p><i class="fas fa-address-card"></i><b> Biographie :</b><br><br>
                    <?= $biography ?? '' ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p><i class="fas fa-drum"></i><b> Instruments :</b><br><br>
                    <?= $instruments ?? '' ?>
                </p>
            </div>
            <div class="col-6">
                <p><i class="fas fa-compact-disc"></i><b> Logiciels :</b><br><br>
                    <?= $softwares ?? '' ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a><i class="fas fa-network-wired"></i><b> Réseaux :</b></a>
                <a title="Facebook" target="_blank" href="<?= $facebookId ?? '#' ?>"><img
                            src="assets/img/facebook-logo.png" width="80" height="60" alt="logo_facebook"></a>
                <a title="Twitter" target="_blank" href="<?= $twitterId ?? '#' ?>"><img
                            src="assets/img/logo_twitter.png" width="80" height="60" alt="logo_twitter"></a>
            </div>
        </div>
    </div>
    <div class="container bg-light opacity mt-2">
            <div class="row">
                <a class="col-12 float-left"><i class="fas fa-music"></i><b> Compositions :</b></a>
                <?php foreach ($compositionsList as $composition) {
                    //récupération du titre sans l'extension de fichier (array)
                    $compositionTitle = explode('.', $composition['title']);
                    $file = $composition['file'];
                    echo '<a title="' .$compositionTitle[0]. '" href="composition.php?id=' .$composition['id']. '" class="col-6">' . $compositionTitle[0] . '</a>' . '
<audio style="height: 20px;" class="float-right col-6" controls controlsList="nodownload">
            <source src="' . $file . '" type="audio/mp3">
            </audio>';
                } ?>
            </div>
    </div>
</div>
<?php require_once 'require/footer.php'; ?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
