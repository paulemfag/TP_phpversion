<?php
require_once 'sqlparameters.php';
// récupération des valeurs du formulaire dans des variables
try {
    $pseudo = $_POST['suscribepseudo'];
    $mailbox = $_POST['suscribemailbox'];
    $password = $_POST['suscribepassword'];
    $accountType = $_POST['typeOfAccount'];
    // insertion dans la base de donnée
    $sth = $db->prepare('INSERT INTO `users` (pseudo, mailbox, password, accounttype)
VALUES (:pseudo, :mailbox, :password, :accountType)');
    $sth->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $sth->bindValue(':mailbox', $mailbox, PDO::PARAM_STR);
    $sth->bindValue(':password', $password, PDO::PARAM_STR);
    $sth->bindValue(':accountType', $accountType, PDO::PARAM_STR);
    $sth->execute();
    //Fichier vérifiant le type d'adresse mail
    require_once 'mailboxhost.php';
    echo '
<div class="alert alert-success" role="alert">
    <p>Votre compte a bien été créer, pour finaliser votre inscription merci de valider votre boite mail à l\'aide de <a href="' .$mailhref. '" class="alert-link">l\'email</a> d\'activation qui viens de vous être envoyé.</p>
</div>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Génération aléatoire d'une clé
$key = md5(microtime(TRUE) * 100000);

// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
try {
    $stmt = $db->prepare('UPDATE `users` SET activationkey = :cle WHERE pseudo = :pseudo');
    $stmt->bindParam(':cle', $key);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();

/*    require_once '../swiftmailer/lib/swift_required.php';
// Mail Transport
    $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
        ->setUsername('boiteprofagot@gmail.com') // Your Gmail Username
        ->setPassword('anticonstitutionnellement'); // Your Gmail Password

// Mailer
    $mailer = Swift_Mailer::newInstance($transport);

// Create a message
    $message = Swift_Message::newInstance('Wonderful Subject Here')
        ->setFrom(array('fill@suscribe.com' => 'Fill')) // can be $_POST['email'] etc...
        ->setTo(array($mailbox => 'Receiver Name')) // your email / multiple supported.
        ->setBody('Here is the <strong>message</strong> itself. It can be text or <h1>HTML</h1>.', 'text/html');

// Send the message
    if ($mailer->send($message)) {
        echo '<h1 class="text-light">Mail sent successfully.</h1>';
    } else {
        echo '<h1 class="text-light">I am sure, your configuration are not correct. :(</h1>';
    }*/

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}



// Préparation du mail contenant le lien d'activation
$destinataire = $mailbox;
$sujet = "Fill activer votre compte";
$entete = "From: Fill | Inscription";

// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
$message = 'Bienvenue sur Fill ' .$pseudo. ',
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou le copier/coller dans votre navigateur Internet.
 
http://fill.info/activation.php?log=' . urlencode($pseudo) . '&cle=' . urlencode($key) . '
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

mail($destinataire, $sujet, $message, $entete); // Envoi du mail
