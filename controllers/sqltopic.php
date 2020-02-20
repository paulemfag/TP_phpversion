<?php
require_once 'sqlparameters.php';
//récupère les informations du topic grace à l'id
$id = $_GET['id'];
var_dump($_GET);
try {
    $query = 'SELECT `id`, DATE_FORMAT(`published_at`, \'le %d/%m/%Y\ à %HH%i\') `published_at`, `id_users` FROM `publications` WHERE `id_users = `' .$id;
    $publicationsQueryStat = $db->query($query);
    $publicationsList = $publicationsQueryStat->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué');
}

foreach ($publicationsList AS $publication): ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"><?= $publication['published_at'] ?>></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <input type="hidden" disabled value="<?= $topic['id'] ?>">
    <td class="text-light"><?= $topic['title'] ?></td>
    <td class="text-light"><?= $topic['created_at'] ?></td>
<?php endforeach;