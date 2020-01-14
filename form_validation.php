<?php
$isSubmitted = false;
//variables msg d'alerte champs mal saisis
$suscribepseudo = $suscribemailbox = $accounttype = $suscribepassword 
= $suscribepasswordconfirmation = $suscribe = $pseudo = $mailbox = $password = 
$login = $actualPassword = $newPassword = $newPasswordConfirm = $recuperationMailbox = $recuperation = '';
//regex pour les contrôle du formulaire
$regexPseudo = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
//tableau d'erreurs
$errors = [];
//FORM INSCRIPTION
    if (isset($_POST['suscribe'])) {
        $isSubmitted = true;
        //ajoute une value au bouton m'inscrire
        $suscribe = 'alreadySubmittedOnce';
        //contôle des radios boutons sur le type
        $accounttype = trim(filter_input(INPUT_POST,'accounttype',FILTER_SANITIZE_NUMBER_INT));
        //contrôle des radio ou des checkbox avec isset et non empty
        if(!isset($_POST['accounttype'])){
            $errors['accounttype'] = 'Veuillez renseigner votre type de compte.';
        }
        //contrôle pseudo
        $suscribepseudo = trim(filter_input(INPUT_POST,'suscribepseudo',FILTER_SANITIZE_STRING));
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
        $suscribepassword = ($_POST['suscribepassword']);
        $suscribepasswordconfirmation = ($_POST['suscribepasswordconfirmation']);
        //contrôle mots de passe
        if (empty($suscribepasswordconfirmation || $suscribepassword)) {
            $errors['suscribepassword'] = 'Veuillez renseigner votre mot de passe.';
        } elseif ($suscribepasswordconfirmation != $suscribepassword){
            $errors['suscribepassword'] = 'Les mots de passe ne correspondent pas.';
        }else{
            $errors['isok'] = 'Votre compte a bien été crée.';
        }
        //FORM LOGIN
    } elseif (isset($_POST['login'])){
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
        }elseif (!filter_var($mailbox, FILTER_VALIDATE_EMAIL)) {
            $errors['mailbox'] = 'Veuillez saisir une adresse mail valide.';
        }
        if (empty($password)) {
            $errors['password'] = 'Veuillez renseigner votre mot de passe.';
        }
       //RECUPERATION MOT DE PASSE
    } elseif (isset ($_POST['recuperation'])) {
        $isSubmitted = true;
        //ajoute une value au bouton
        $recuperation = 'alreadySubmittedOnce';
        //déclaration variable
        //$recuperationMailbox = $_POST['recuperationMailbox'];
        $recuperationMailbox = trim(htmlspecialchars($_POST['recuperationMailbox']));
        if (empty($recuperationMailbox)){
            $errors['recuperationMailbox'] = 'Veuillez renseigner votre adresse mail.';
        }elseif (!filter_var($recuperationMailbox, FILTER_VALIDATE_EMAIL)) {
            $errors['recuperationMailbox'] = 'Veuillez saisir une adresse mail valide.';
        }else{
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
        if (empty($actualPassword)){
            $errors['actualPassword'] = 'Veuillez saisir votre mot de passe.';
        }if (empty ($newPassword)) {
            $errors['newPassword'] = 'Veuillez choisir un nouveau mot de passe.';
        }elseif ($actualPassword == $newPassword) {
            $errors['newPassword'] = 'Le nouveau mot de passe et l\'ancien ne peuvent être identiques';
        }if (empty ($newPasswordConfirm)) {
            $errors['newPasswordConfirm'] = 'Veuillez confirmer votre nouveau mot de passe.';
        }if ($newPassword != $newPasswordConfirm) {
            $errors['newPassword'] = 'Les mots de passes ne correspondent pas.';
            $errors['newPasswordConfirm'] = 'Les mots de passes ne correspondent pas.';
        }else{
            $errors['isok'] = 'Votre mot de passe à bien été changé.';
        }
    } 

