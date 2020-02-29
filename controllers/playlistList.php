<?php
require_once 'sqlparameters.php';
$id = $_SESSION['id'];
try {
    $sth = $db->prepare('SELECT * FROM `playlists` WHERE `id_users` = :id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $playlists = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué');
}
foreach ($playlists as $playlist){
    $playlistsList = '<a class="dropdown-item" href="playlist.php?id='. $playlist['id'] .'">'. $playlist['title'] .'</a>';
}