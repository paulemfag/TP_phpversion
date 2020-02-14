<?php
$isSubmitted = false;
//variables msg d'alerte champs mal saisis
$suscribepseudo = $suscribemailbox = $accounttype = $suscribepassword
    = $suscribepasswordconfirmation = $suscribe = $pseudo = $mailbox = $password =
$login = $actualPassword = $newPassword = $newPasswordConfirm = $recuperationMailbox = $recuperation = '';
//regex pour les contrôle des formulaires
$regexPseudo = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
$regexCompositionName = '/^(([A-Z|a-z|áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,50})+((-|\s)?)+([A-Z|a-z|áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{0,50})((-|\s)+){0,5})$/';
//tableau d'erreurs
$errors = [];
//FORM INSCRIPTION
if (isset($_POST['suscribe'])) {
    $isSubmitted = true;
    //ajoute une value au bouton m'inscrire pour le réafficher en js
    $suscribe = 'alreadySubmittedOnce';
    //contrôle pseudo
    $suscribepseudo = trim(filter_input(INPUT_POST, 'suscribepseudo', FILTER_SANITIZE_STRING));
    if (empty($suscribepseudo)) {
        $errors['suscribepseudo'] = 'Veuillez renseigner votre pseudo.';
    } elseif (!preg_match($regexPseudo, $suscribepseudo)) {
        $errors['suscribepseudo'] = 'Votre pseudo contient des caractères non autorisés !';
    }
    //contrôle adresse mail
    $suscribemailbox = trim(htmlspecialchars($_POST['suscribemailbox']));
    if (empty($suscribemailbox)) {
        $errors['suscribemailbox'] = 'Veuillez renseigner votre adresse mail.';
    } elseif (!filter_var($suscribemailbox, FILTER_VALIDATE_EMAIL)) {
        $errors['suscribemailbox'] = 'Veuillez saisir une adresse mail valide.';
    }
    //déclaration variables mots de passe
    $suscribepassword = $_POST['suscribepassword'];
    $suscribepasswordconfirmation = $_POST['suscribepasswordconfirmation'];
    //contrôle mots de passe
    if (empty($suscribepassword)) {
        $errors['suscribepassword'] = 'Veuillez renseigner votre mot de passe.';
    } elseif (isset($suscribepassword) && empty($suscribepasswordconfirmation)) {
        $errors['suscribepassword'] = 'Veuillez confirmer votre mot de passe';
    } elseif ($suscribepasswordconfirmation != $suscribepassword) {
        $errors['suscribepassword'] = 'Les mots de passe ne correspondent pas.';
    }
    //Si le formulaire d'inscription a été envoyé et qu'il n'y a pas d'erreurs renvoi vers la page suscribe.php
    if (isset($_POST['suscribe']) && count($errors) == 0){
        header('location:suscribe.php');
        exit();
    }
    if (isset($_POST['submitSuscribeCompositor']) || isset($_POST['submitSuscribeParticular'])){
        $accounttype = $_POST['accounttype'];
    }
     //FORM LOGIN
} elseif (isset($_POST['login'])) {
    $isSubmitted = true;
    //ajoute une value au bouton me connecter
    $login = 'alreadySubmittedOnce';
    //déclaration variables
    $pseudo = $_POST['pseudo'];
    $mailbox = $_POST['mailbox'];
    $password = $_POST['password'];
    if (empty($pseudo)) {
        $errors['pseudo'] = 'Veuillez renseigner votre pseudo.';
    }
    if (empty($mailbox)) {
        $errors['mailbox'] = 'Veuillez renseigner votre adresse mail.';
    } elseif (!filter_var($mailbox, FILTER_VALIDATE_EMAIL)) {
        $errors['mailbox'] = 'Veuillez saisir une adresse mail valide.';
    }
    if (empty($password)) {
        $errors['password'] = 'Veuillez renseigner votre mot de passe.';
    }
    //Si le formulaire de connexion a été envoyé et qu'il n'y a pas d'erreurs renvoi vers la page accueil.php
    if (isset($_POST['login']) && count($errors) == 0){
        header('location:accueil.php');
        exit();
    }
} elseif (isset($_POST['newComposition'])) {
    if (!file_exists($_POST['file'])) {
        $errors['file'] = 'Veuillez ajouter un fichier.';
    }
    $compositionName = trim(filter_input(INPUT_POST, 'compositionName', FILTER_SANITIZE_STRING));
    if (empty($_POST['compositionName'])) {
        $errors['compositionName'] = 'Veuillez ajouter un titre.';
    }
    if (isset($_POST['compositionName']) && !preg_match($regexCompositionName, $compositionName)) {
        $errors['compositionName'] = 'Votre titre contient des caratères non autorisés';
    }
} elseif (isset($_POST['submitsubject'])) {
    //vérification sujet
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    if (empty($subject)) {
        $errors['subject'] = 'Veuillez renseigner le sujet.';
    }
    $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
    if (empty($author)) {
        $errors['author'] = 'Veuillez renseigner votre pseudonyme.';
    }
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
    if (empty($message)) {
        $errors['message'] = 'Veuillez renseigner votre message.';
    }
    //Vérifications RECUPERATION MOT DE PASSE
} elseif (isset ($_POST['recuperation'])) {
    $isSubmitted = true;
    //ajoute une value au bouton
    $recuperation = 'alreadySubmittedOnce';
    //déclaration variable
    $recuperationMailbox = trim(htmlspecialchars($_POST['recuperationMailbox']));
    if (empty($recuperationMailbox)) {
        $errors['recuperationMailbox'] = 'Veuillez renseigner votre adresse mail.';
    } elseif (!filter_var($recuperationMailbox, FILTER_VALIDATE_EMAIL)) {
        $errors['recuperationMailbox'] = 'Veuillez saisir une adresse mail valide.';
    } else {
        $errors['isok'] = 'Un email de récupération vous a été envoyé.';
    }
    //CHANGEMENT MOT DE PASSE
} elseif (isset ($_POST['changeMyPassword'])) {
    $isSubmitted = true;
    //ajoute une value au bouton me connecter
    $changeMyPassword = 'alreadySubmittedOnce';
    $actualPassword = ($_POST['actualPassword']);
    $newPassword = ($_POST['newPassword']);
    $newPasswordConfirm = ($_POST['newPasswordConfirm']);
    if (empty($actualPassword)) {
        $errors['actualPassword'] = 'Veuillez saisir votre mot de passe.';
    }
    if (empty ($newPassword)) {
        $errors['newPassword'] = 'Veuillez choisir un nouveau mot de passe.';
    } elseif ($actualPassword == $newPassword) {
        $errors['newPassword'] = 'Le nouveau mot de passe et l\'ancien ne peuvent être identiques';
    }
    if (empty ($newPasswordConfirm)) {
        $errors['newPasswordConfirm'] = 'Veuillez confirmer votre nouveau mot de passe.';
    }
    if ($newPassword != $newPasswordConfirm) {
        $errors['newPassword'] = 'Les mots de passes ne correspondent pas.';
        $errors['newPasswordConfirm'] = 'Les mots de passes ne correspondent pas.';
    } else {
        $errors['isok'] = 'Votre mot de passe à bien été changé.';
    }
} elseif (isset($_POST['removeMyAccount'])) {
    $isSubmitted = true;
    //ajoute une value au bouton me connecter
    $removeMyAccount = 'alreadySubmittedOnce';
}

