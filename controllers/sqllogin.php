<?php
require_once 'sqlparameters.php';

// Récupération de la valeur du champ actif pour le login $login
$stmt = $db->prepare("SELECT id, pseudo, password, active, accounttype FROM `users` WHERE pseudo LIKE :pseudo ");
if ($stmt->execute(array(':pseudo' => $pseudo)) && $row = $stmt->fetch()) {
    $id = $row['id'];
    $active = $row['active']; // $actif contient alors 0 ou 1
    $pseudo = $row['pseudo'];
    $password = $row['password'];
    $accounttype = $row['accounttype'];

    // Il ne nous reste plus qu'à tester la valeur du champ 'actif' pour autoriser ou non le membre à se connecter
    // Si l'utilisateur viens de la page 'activation.php' et que la valeur de la colonne active est égale à 1, on autorise la connexion
    if (isset($_GET['activation']) && $active == '1' && $pseudo == $_POST['pseudo'] && $password == $_POST['password']) {
        session_set_cookie_params(10,"/");
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['accounttype'] = $accounttype;
        $_SESSION['id'] = $id;
        header('location:suscribe.php');
        exit();
    }

// Si la valeur de la colonne active est égale à 1, on autorise la connexion
    if ($active == '1' && $pseudo == $_POST['pseudo'] && password_verify($_POST['password'], $password)) {
        session_set_cookie_params(10,"/");
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['accounttype'] = $accounttype;
        $_SESSION['id'] = $id;
        header('location:accueil.php');
        exit();
    }
    // Sinon la connexion est refusé...
    else {
        $errors['login'] = 'Votre identifiant ou mot de passe est incorrect merci de réessayer.';
    }
} else {
    $errors['login'] = 'Votre identifiant ou mot de passe est incorrect merci de réessayer.';
}
