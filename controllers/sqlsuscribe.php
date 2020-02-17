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
    echo '
<script>
alert("Entrée ajoutée dans la table.")
</script>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Génération aléatoire d'une clé
$key = md5(microtime(TRUE) * 100000);

// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
try {
    $stmt = $db->prepare('UPDATE `users` SET activationkey = :cle WHERE pseudo like :pseudo');
    $stmt->bindParam(':cle', $key);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Préparation du mail contenant le lien d'activation
$destinataire = $mailbox;
$sujet = "Fill activer votre compte";
$entete = "From: Fill | Inscription";

// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
$message = 'Bienvenue sur Fill,
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou le copier/coller dans votre navigateur Internet.
 
http://fill.info/activation.php?log=' . urlencode($pseudo) . '&cle=' . urlencode($key) . '
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

mail($destinataire, $sujet, $message, $entete); // Envoi du mail

