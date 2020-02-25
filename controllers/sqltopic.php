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
    <div id="scroll">
    <div class="card container mb-2">
        <div class="card-body">
            <label class="float-left" for="response">Poster un message</label>
            <input class="col-12" name="response" type="text">
            <a href="#" class="btn btn-primary float-right">Publier</a>
        </div>
    </div>
<?php
try {
    $sth = $db->prepare('SELECT `id`, `message`, DATE_FORMAT(`published_at`, \'le %d/%m/%Y\ à %HH%i\') `published_at`, `id_users` FROM `publications` WHERE `id_topics` = :id ORDER BY `published_at` DESC');
    $sth->bindValue(':id', $topicId, PDO::PARAM_INT);
    $sth->execute();
    $publicationsList = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué !');
}

foreach ($publicationsList AS $publication): ?>
    <?php
    $id = $publication['id_users'];
    try {
    $sth = $db->prepare('SELECT `pseudo` FROM `users` WHERE `id` = :id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $usersList = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
    die('Connexion échoué !');
    }
    foreach ($usersList as $user){
        $pseudo = $user['pseudo'];
    }
    ?>
    <div id="cardForum" class="card container mb-2">
        <div class="card-body">
            <p class="card-text float-right" style="font-style: italic"><?= $pseudo. ', ' .$publication['published_at'] ?></p>
            <p class="card-text float-left col-12"><?= $publication['message'] ?></p>
        </div>
    </div>
<?php endforeach; ?>
    </div>
