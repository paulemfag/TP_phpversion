<?php
//si l'id n'est pas défini ou que ce n'est pas un entier redirige vers la page d'accueil
if (!filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    header('location:accueil.php');
    exit();
    //Sinon récupère l'id dans une variable
} else {
    $idCompositor = $_GET['id'];
}
require_once 'sqlparameters.php';
//récupération des infos du compositeur en BDD
try {
    $sth = $db->prepare('SELECT `pseudo`, `biography`, `instruments`, `softwares`, `facebookId`, `twitterId` FROM `users` WHERE `id` = :id');
    $sth->bindValue(':id', $idCompositor, PDO::PARAM_INT);
    $sth->execute();
    $userInformations = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
//stockage des informations dans des variables
foreach ($userInformations as $row){
    $pseudo = $row['pseudo'];
    $biography = $row['biography'];
    $instruments = $row['instruments'];
    $softwares = $row['softwares'];
    $facebookId = $row['facebookId'];
    $twitterId = $row['twitterId'];
}
//définition du titre de l'onglet
$title = 'Compositeur | ' .$pseudo;
//récupération des composition du compositeur
try {
    $sth = $db->prepare('SELECT `id`, `title`, `file` FROM `compositions` WHERE `id_users` = :id ORDER BY `title` ASC');
    $sth->bindValue(':id', $idCompositor, PDO::PARAM_INT);
    $sth->execute();
    $compositionsList = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
//affichage des infos compositions
