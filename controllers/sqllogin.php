<?php
require_once 'sqlparameters.php';

// Récupération de la valeur du champ actif pour le login $login
$stmt = $db->prepare("SELECT active FROM `users` WHERE pseudo like :pseudo ");
if($stmt->execute(array(':pseudo' => $pseudo))  && $row = $stmt->fetch()) {
    $active = $row['active']; // $actif contiendra alors 0 ou 1

    // Il ne nous reste plus qu'à tester la valeur du champ 'actif' pour
// autoriser ou non le membre à se connecter

// Si la valeur de la colonne active est égale à 1, on autorise la connexion
    if($active == '1') {
        header('location:accueil.php');
        exit();
    }
// Sinon la connexion est refusé...
    else {
        $errors['login'] = 'Votre identifiant ou mot de passe est incorrect merci de réessayer.';
    }
}
