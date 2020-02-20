<?php
require_once 'sqlparameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex) {
    die('Connexion échoué');
}
//récupère les informations de la table topic
try {
    $query = 'SELECT `id`, `title`, DATE_FORMAT(`created_at`, \'le %d/%m/%Y\ à %HH%i\') `created_at`, `id_users` FROM `topics`';
    $topicQueryStat = $db->query($query);
    $topicList = $topicQueryStat->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die('Connexion échoué');
}
foreach ($topicList AS $topic): ?>
<tr class="shadow">
    <input type="hidden" disabled value="<?= $topic['id'] ?>">
    <td class="text-light"><?= $topic['title'] ?></td>
    <?php try {
        $query = 'SELECT `pseudo` FROM `users` WHERE id =' . $topic['id_users'];
        $userQueryStat = $db->query($query);
        $userList = $userQueryStat->fetchAll(PDO::FETCH_ASSOC);
        foreach ($userList AS $user) {
            $id = $topic['id_users'];
            $topic['id_users'] = $user['pseudo'];
        }
    } catch (Exception $ex) {
        die('Connexion échoué');
    } ?>
    <td class="text-light"><a href="topic.php?id=<?= $id ?>"><?= $topic['id_users'] ?></a></td>
    <td class="text-light"><?= 'à définir' ?></td>
    <td class="text-light"><?= $topic['created_at'] ?></td>

    <?php endforeach;
    //récupère le pseudo dans la table users
    try {
        $query = 'SELECT `id`, `pseudo` FROM `users` WHERE id =' . $topic['id_users'];
        $userQueryStat = $db->query($query);
        $userList = $userQueryStat->fetchAll(PDO::FETCH_ASSOC);
        foreach ($userList AS $user) {
            $topic['id_users'] = $user['pseudo'];
            echo '<td class="text-light">' . $topic['id_users'] = $user['pseudo'] . '</td>';
        }
    } catch (Exception $ex) {
        die('Connexion échoué');
    }

