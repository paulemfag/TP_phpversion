<?php
$isSubmitted = false;
//variables msg d'alerte champs mal saisis
$lastname = $firstname = $pseudo = $mailbox = '';
//regex pour les contrôle du formulaire
$regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
//tableau d'erreurs
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;
    $firstname = trim(filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_STRING));
    if (empty($firstname)) {
        $errors['firstname'] = 'Veuillez renseigner votre prénom';
    } elseif (!preg_match($regexName, $firstname)) {
        $errors['firstname'] = 'Votre prénom contient des caractères non autorisés !';
    }
    $lastname = trim(filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_STRING));
    if (empty($lastname)) {
        $errors['lastname'] = 'Veuillez renseigner votre nom';
    } elseif (!preg_match($regexName, $lastname)) {
        $errors['lastname'] = 'Votre nom contient des caractères non autorisés !';
    }
    $mailbox = trim(htmlspecialchars($_POST['mailbox']));
    if (empty($mailbox)) {
        $errors['mailbox'] = 'Veuillez renseigner votre email';
    } elseif (!filter_var($mailbox, FILTER_VALIDATE_EMAIL)) {
        $errors['mailbox'] = 'L\' email  n\'est pas valide!';
    }

}
