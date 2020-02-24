<?php
/*if (empty($_GET['id'])){
    header('location:forum.php');
    exit();
}*/
require_once 'sqlparameters.php';
//récupère les informations du topic grace à l'id
$topicId = $_GET['id'];
try {
    $sth = $db->prepare('SELECT `title` FROM `topics` WHERE `id` = :id');
    $sth->bindValue(':id', $topicId, PDO::PARAM_INT);
    $sth->execute();
    $topics = $sth->fetch();
} catch (Exception $ex) {
    die('Connexion échoué !');
}
?>
    <div class="container bg-light mt-2 opacity">
        <a id="returnArrow" title="Fill | Forum" href="forum.php"><i class="fas fa-arrow-left"
                                                                     style="font-size: 50px;"></i></a>
        <h1 class="text-center ml-auto mr-auto"><?= $topics['title'] ?></h1>
    </div>
<?php
try {
    $sth = $db->prepare('SELECT `id`, `message`, DATE_FORMAT(`published_at`, \'le %d/%m/%Y\ à %HH%i\') `published_at`, `id_users` FROM `publications` WHERE `id_topics` = :id');
    $sth->bindValue(':id', $topicId, PDO::PARAM_INT);
    $sth->execute();
    $publicationsList = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué !');
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