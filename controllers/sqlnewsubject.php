<?php
require_once 'sqlparameters.php';
//$created_at = $_POST['dateOfCreation'];
//$created_at = filter_input(INPUT_POST, 'dateOfCreation', FILTER_SANITIZE_STRING);
//var_dump($created_at);
// récupération des valeurs du formulaire dans des variables
try {
    $subject = $_POST['subject'] ?? '';
    $id = $_GET['id'] ?? '';
    echo '<p class="text-light">' .$id. '</p>';
    // insertion dans la base de donnée
    $sth = $db->prepare('INSERT INTO `topics` (`id`, `title`, `created_at`, `id_users`) VALUES (NULL, :subject, CURRENT_TIMESTAMP, :id_user)');
    $sth->bindValue(':subject', $subject, PDO::PARAM_STR);
    $sth->bindValue(':id_user', $id, PDO::PARAM_INT);
    $sth->execute();
    $subjectAdded = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
<p>Votre topic a bien été crée</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    echo $subjectAdded;
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}