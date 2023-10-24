<link rel="stylesheet" href="../assets/js/media.js" />
<link rel="stylesheet" href="../assets/css/media.css" />
<?php require_once '../config/function.php';
require_once '../inc/backheader.inc.php';

$coms=execute("SELECT* FROM comment")->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = ' supprimé';
        header('location:./comment.php');
        exit;
    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./comment.php');
        exit;
    }
}
?>


<table class= "table table-dark table-striped w-75 mx-auto">
    <thead>
        <tr class= "text-center">
            <td>Id-com</td>
            <td>commentaire</td>
            <td>Note</td>
            <td>Auteur</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($coms as $comment) : ?>
            <tr>
                <td><?= $comment['id_comment']; ?></td>
                <td><?= $comment['comment_text']; ?></td>
                <td><?= $comment['rating_comment']; ?></td>
                <td><?= $comment['nickname_comment']; ?></td>
                <td><?= $comment['publish_date_comment']; ?></td>
                <td class="text-center">
                    <a href="?id=<?= $comment['id_comment']; ?>&a=mod" class="btn btn-outline-info text-center">Modération</a>
                    <a href="?id=<?= $comment['id_comment']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>
                </td>
                </tr>
        <?php endforeach; ?>
                    </tbody>
</table>













<?php require_once '../inc/backfooter.inc.php';     ?>