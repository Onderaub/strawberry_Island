<link rel="stylesheet" href="../assets/js/media.js" />
<link rel="stylesheet" href="../assets/css/media.css" />
<link rel="stylesheet" href="../assets/css/eventback.css" />
<?php require_once '../config/function.php';
require_once '../inc/backheader.inc.php';

$events = execute("SELECT * FROM event_content INNER JOIN content ON event_content.id_content = content.id_content INNER JOIN `event` ON `event`.id_event= event_content.id_event INNER JOIN event_media ON event_media.id_event = `event`.id_event INNER JOIN media ON media.id_media = event_media.id_media")->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ajout">
<a href="addevent.php" class="btn btn-outline-info text-center ml-1 w-175 ">Ajouter un event</a>
                                                
    </div>
                </form>
            </section>
            <table class="table table-dark table-filled">
                <thead>

                    <tr class="text-center">
                        <td>Titre</td>
                        <td colspan="2">Debut de l'évenement</td>
                        <td>Médias</td>
                        <td>Descriptif</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($events as $event) : ?>
                
            <tr class="text-center">
                <td><?= $event['title_content']; ?></td>
                <td><?= $event['start_date_event']; ?></td>
                <td><?= $event['end_date_event']; ?></td>
                <td><img src=" ../assets/upload/<?= $event['title_media']; ?>" alt="Miniature" class="thumbnail" width=50></td>
                <td><?= $event['description_content']; ?></td>
                <td class="text-center">
                    <a href="?id=<?= $comment['id_comment']; ?>&a=edit" class="btn btn-outline-info text-center">Modifier</a>
                    <a href="?id=<?= $comment['id_comment']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>
                </td>
                </tr>
        
        <?php endforeach; ?>
                </tbody>
            </table>