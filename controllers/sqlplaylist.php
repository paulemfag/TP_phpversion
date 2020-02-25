<?php
//récupération de la variable Get
$idPlaylist = $_GET['id'];
//Vérifie si elle n'est pas vide et si c'est un entier
if (empty($idPlaylist) || !filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
    //redirection vers la page d'accueil
    header('location:accueil.php');
    exit();
}
//récupérations des infos, log BDD
require_once 'sqlparameters.php';
//récupération des infos de la playlist en BDD
try {
    $sth = $db->prepare('SELECT * FROM `playlists` WHERE `id` = :id');
    $sth->bindValue(':id', $idPlaylist, PDO::PARAM_INT);
    $sth->execute();
    $playlists = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué');
}
$title = 'Fill | ' . $playlist['title'];