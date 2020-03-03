<?php
require_once 'sqlparameters.php';
if (!filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    header('location:accueil.php');
    exit();
} else {
    $id = $_GET['id'];
}
//récupération des infos de la table compositions en BDD
$stmt = $db->prepare('SELECT `id`, `title`, `file`, `chords`, `instrumentsUsed`, `id_users`, `style` FROM `compositions` WHERE `id` = :id');
if ($stmt->execute(array(':id' => $id)) && $row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
    //stockage des informations dans des variables
    foreach ($row as $rowInfo) {
        $compositionTitleExplode = explode('.', $rowInfo['title']);
        $compositionTitle = $compositionTitleExplode[0];
        $file = $rowInfo['file'];
        $idUser = $rowInfo['id_users'];
        $chords = $rowInfo['chords'];
        $instruments = $rowInfo['instrumentsUsed'];
        $style = $rowInfo['style'];
    }
    $title = 'Page composition | ' . $compositionTitle;
}
//récupération pseudo du compositeur
try {
    $sth = $db->prepare('SELECT `pseudo` FROM `users` WHERE `id` = :id');
    $sth->bindValue(':id', $idUser, PDO::PARAM_INT);
    $sth->execute();
    $user = $sth->fetch();
} catch (Exception $ex) {
    die('Connexion échoué !');
}
$compositorPseudo = $user['pseudo'];