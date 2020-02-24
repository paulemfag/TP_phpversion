<?php
require_once 'sqlparameters.php';
// récupération des valeurs du formulaire dans des variables
try {
    $pseudo = $_POST['suscribepseudo'];
    $mailbox = $_POST['suscribemailbox'];
    $password =  password_hash($_POST['suscribepassword'], PASSWORD_DEFAULT);
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
    // si l'extension mail match avec une des regex le text mail est un href redirigeant vers la boite mail correspondante
    if (isset($mailhref)) {
        $activeYourAccount = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p>Votre compte a bien été créer, pour finaliser votre inscription merci de valider votre boite mail à l\'aide de <a href="' . $mailhref . '" class="alert-link">l\'email</a> d\'activation qui viens de vous être envoyé.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    } //sinon
    else {
        $activeYourAccount = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>Votre compte a bien été créer, pour finaliser votre inscription merci de valider votre boite mail à l\'aide de l\'email d\'activation qui viens de vous être envoyé.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Génération aléatoire d'une clé
$key = md5(microtime(TRUE) * 100000);

// Insertion de la clé dans la base de données
try {
    $stmt = $db->prepare('UPDATE `users` SET activationkey = :cle WHERE pseudo = :pseudo');
    $stmt->bindParam(':cle', $key);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();
/*
    //récupération du fichier requis
    require_once '../swiftmailer/lib/swift_required.php';
    // Mail Transport
    $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername('boiteprofagot@gmail.com')->setPassword('anticonstitutionnellement');
    // Mailer
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = new Swift_Message('Weekly Hours');
    $message->setFrom('no-reply@fill.info');
    $message->setTo('boiteprofagot@gmail.com');
    $message->setSubject('Weekly Hours');
    $message->setBody('Test Message', 'text/html');
    $result = $mailer->send($message);

    // Send the message
    if ($mailer->send($message)) {
        echo '<h1 class="text-light">Mail sent successfully.</h1>';
    } else {
        echo '<h1 class="text-light">I am sure, your configuration are not correct. :(</h1>';
    }*/

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

/*Méthode qui vérifie si une adresse mail est libre.
     * 0 : L'adresse mail n'existe pas
* 1 : Elle existe*/
/*return type
    function checkFreeMail() {
        $query = 'SELECT COUNT() AS nbMail FROM dex_user WHERE mail = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->execute();
        $checkFreeMail = $result->fetch(PDO::FETCH_OBJ);
        return $checkFreeMail->nbMail;
    }*/


//require_once '../PHPMailer/PHPMailerAutoload.php';
// Préparation du mail contenant le lien d'activation
/*$destinataire = $mailbox;
$sujet = "Fill activer votre compte";
$entete = "From: Fill | Inscription";

// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
$message = 'Bienvenue sur Fill ' .$pseudo. ',
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou le copier/coller dans votre navigateur Internet.
 
http://fill.info/activation.php?log=' . urlencode($pseudo) . '&cle=' . urlencode($key) . '
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
function mail ($destinataire, $sujet, $message, $entete){
//require_once '../PHPMailer/PHPMailerAutoload.php';
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
}*/
