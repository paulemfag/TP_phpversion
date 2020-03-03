<?php
require_once 'sqlparameters.php';

//Déclaration variables
$fileName = $_FILES['file']['name'];
$compositionStyle = $_POST['compositionStyle'] ?? '';

//Insertion en BDD : table `categories`
try {
    $sth = $db->prepare('INSERT INTO `categories` (`title`, `style`) VALUES (:title, :style)');
    $sth->bindValue(':title', $fileName, PDO::PARAM_STR);
    $sth->bindValue(':style', $compositionStyle, PDO::PARAM_STR);
    $sth->execute();
    echo '
<script>
alert("Entrée ajoutée dans la table categories.")
</script>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

//Récupération en BDD : id de la compo dans la table `categories`
try {
    $stmt = $db->prepare('SELECT `id` FROM `categories`  WHERE `title` LIKE :title');
    if ($stmt->execute(array(':title' => $fileName)) && $row = $stmt->fetch()) {
        $idComposition = $row['id'];
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
//explode afin de récupérer le titre du fichier sans l'extension
$title = explode('.', $fileName);

//Insertion en BDD : table `compositions`
try {
    $sth = $db->prepare('INSERT INTO `compositions` (`title`, `file`, `id_users`, `id_categories`, `style`) VALUES (:title, :file, :idUser, :idCategory, :style)');
    $sth->bindValue(':title', $title[0], PDO::PARAM_STR);
    $sth->bindValue(':file', '../uploads/_'. $fileName, PDO::PARAM_STR);
    $sth->bindValue(':idUser', $id, PDO::PARAM_INT);
    $sth->bindValue(':idCategory', $idComposition, PDO::PARAM_INT);
    $sth->bindValue(':style', $compositionStyle, PDO::PARAM_STR);
    $sth->execute();
    $compositionAdded = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>Votre composition "' .$title[0]. '" a bien été ajoutée.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}