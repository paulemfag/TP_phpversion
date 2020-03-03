<?php
require_once 'sqlparameters.php';
try {
    $sth = $db->prepare('SELECT `pseudo`, `biography`, `instruments`, `software`, `facebookId`, `twitterId` FROM `users` WHERE `id` = :id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
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
    $software = $row['software'];
    $facebookId = $row['facebookId'];
    $twitterId = $row['twitterId'];
}
try {
    $sth = $db->prepare('SELECT `id`, `title`, `file`, `style` FROM `compositions` WHERE `id_users` = :id ORDER BY `title` ASC');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $compositionsList = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}