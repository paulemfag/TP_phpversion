<?php
require_once 'sqlparameters.php';
$id = $_SESSION['id'];
//Insertion dans la table categories
try {
    $sth = $db->prepare('INSERT INTO `categories` (:categorie) VALUES (:title)');
    $sth->bindValue(':categorie', $compositionStyle, PDO::PARAM_STR);
    $sth->bindValue(':title', $compositionName, PDO::PARAM_STR);
    $sth->execute();
    echo '
<script>
alert("Entrée ajoutée dans la table categories.")
</script>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
//récupération de l'id dans la table categories
$query = $db->prepare('SELECT id FROM `categories` WHERE ' .$compositionStyle. ' = ' .$compositionName. '');
//$sth->bindValue(':categorie', $compositionStyle, PDO::PARAM_STR);
//$sth->bindValue(':title', $compositionName, PDO::PARAM_STR);
//$sth->execute();
$patientsQueryStat = $db->query($query);
$patientsList = $patientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
var_dump($patientsList);
//Insertion dans la table compositions
/*try {
    $sth = $db->prepare('INSERT INTO `compositions` (title, file, id_users, id_categories) VALUE (:title, :file, :iduser, :idcategorie)');
    //$sth->bindValue(':title', $compositionName, PDO::PARAM_STR);
    $sth->bindValue(':file', $firstName, PDO::PARAM_STR);
    //$sth->bindValue(':iduser', $id, PDO::PARAM_INT);
    $sth->bindValue(':idcategorie', $compositionStyle, PDO::PARAM_STR);
    $sth->execute();
    echo '
<script>
alert("Entrée ajoutée dans la table compositions.")
</script>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}*/