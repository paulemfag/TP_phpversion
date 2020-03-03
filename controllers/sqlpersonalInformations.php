<?php
require_once 'sqlparameters.php';
$pseudo = $_SESSION['pseudo'];
//teste les variables pour voir ce qu'elles contiennents
if (!empty($biography)) {
    $biography = $_POST['biography'];
} else {
    $biography = NULL;
}
if (!empty($instruments)) {
    $instruments = $_POST['instruments'] ?? NULL;
} else {
    $instruments = NULL;
}
if (!empty($software)) {
    $software = $_POST['software'] ?? $_POST['otherSoftware'];
} else {
    $software = NULL;
}
if (!empty($tagsCompositorOne)) {
    $tagsCompositorOne = $_POST['tagsCompositorOne'];
} else {
    $tagsCompositorOne = NULL;
}
if (!empty($facebook)) {
    $facebook = $_POST['facebookId'];
} else {
    $facebook = NULL;
}
if (!empty($twitter)) {
    $twitter = $_POST['twitterId'] ?? NULL;
} else {
    $twitter = NULL;
}
try {
    $stmt = $db->prepare('UPDATE `users` SET `biography` = :biography, `instruments` = :instruments, `facebookId` = :facebookId, `twitterId` = :twitterId, `software` = :software WHERE pseudo = :pseudo');
    //$stmt->bindParam(':favoritesStyles', $key);
    $stmt->bindParam(':biography', $biography);
    $stmt->bindParam(':instruments', $instruments);
    $stmt->bindParam(':facebookId', $facebook);
    $stmt->bindParam(':twitterId', $twitter);
    $stmt->bindParam(':software', $software);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();
    header('location:accueil.php');
    exit();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
