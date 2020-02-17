<?php
require_once 'sqlparameters.php';
// Si les variables ne sont pas définies dans l'url renvoie vers la page d'accueil du site.
/*if (empty($_GET['log']) || empty($_GET['cle'])){
    header('location:index.php');
    exit();
}*/
// Récupération des variables nécessaires à l'activation
$pseudo = $_GET['log'];
$activationkey = $_GET['cle'];

// Récupération de la clé correspondant au $login dans la base de données
$stmt = $db->prepare('SELECT activationkey ,active FROM `users` WHERE pseudo like :pseudo ');
if ($stmt->execute(array(':pseudo' => $pseudo)) && $row = $stmt->fetch()) {
    $activationkeybdd = $row['activationkey'];    // Récupération de la clé
    $active = $row['active']; // $active contiendra alors 0 ou 1
}
// On teste la valeur de la variable $actif récupérée dans la BDD
if ($active == '1') // Si le compte est déjà actif on prévient
{
    echo '<div class="container text-center bg-light mt-2 opacity"><h1 class="text-primary ml-auto mr-auto">Votre compte est déjà activé !</h1></div><a href="http://fill.info?activation=isOk" id="login" class="btn btn-outline-success col-12 ">Me connecter</a>';
} else // Si ce n'est pas le cas on passe aux comparaisons
{
    if ($activationkey == $activationkeybdd) // On compare nos deux clés
    {
        // Si elles correspondent on active le compte !
        echo '<div class="container text-center bg-light mt-2 opacity"><h1 class="text-primary ml-auto mr-auto">Votre compte a bien été activé !</h1></div><a href="http://fill.info?activation=isOk" id="login" class="container btn btn-outline-success col-12 ">Me connecter</a>';

        // La requête qui va passer notre champ actif de 0 à 1
        $stmt = $db->prepare('UPDATE `users` SET active = 1 WHERE pseudo like :pseudo ');
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->execute();
    }  // Si les deux clés sont différentes on provoque une erreur...
    else {
        echo 'Erreur ! Votre compte ne peut être activé...';
    }
}
