<?php
function accountType()
{
    require_once 'sqlparameters.php';
//récupération des valeurs dans des variables
    $changeAccount = '';
    $actualAccountType = $_POST['actualType'];
    $pseudo = $_SESSION['pseudo'];
    $changeAccountPassword = $_POST['changeAccountPassword'];
    if ($actualAccountType == 'compositeur') {
        $accounttype = 'particular';
    }
    if ($actualAccountType == 'particulier') {
        $accounttype = 'compositor';
    }
//vérification de la valeur de l'input et conversion de la valeur si celle ci est bonne
    if ($accounttype != $actualAccountType && $accounttype == 'compositor' || $accounttype == 'particular') {
        if ($accounttype == 'particulier') {
            $accounttype = 'particular';
        }
        if ($accounttype == 'compositeur') {
            $accounttype = 'compositor';
        }
//récupération des colonnes en BDD
        try {
            $stmt = $db->prepare('SELECT pseudo, password, accounttype FROM `users` WHERE `pseudo` LIKE :pseudo ');
            if ($stmt->execute(array(':pseudo' => $pseudo)) && $row = $stmt->fetch()) {
                $password = $row['password'];
                //comparaison du mot de passe saisi avec celui de la BDD
                if ($changeAccountPassword === $password) {
                    try {
                        $sth = $db->prepare('UPDATE `users` SET accounttype = :accounttype WHERE `pseudo` = :pseudo');
                        $sth->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
                        $sth->bindValue(':accounttype', $accounttype, PDO::PARAM_STR);
                        $sth->execute();
                    } catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                } else {
                    $errors['changeAccountPassword'] = 'Veuillez renseigner votre mot de passe.';
                }
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        $errors['changeAccountPassword'] = 'Veuillez renseigner votre mot de passe.';
    }
/*    $changeAccount = 'isOk';
    if ($_SESSION['accounttype'] == 'compositor') {
        $_SESSION['accounttype'] = 'particular';
    } elseif ($_SESSION['accounttype'] == 'particular') {
        $_SESSION['accounttype'] = 'compositor';
    }*/
    header('location:parameters.php');
    exit();
}