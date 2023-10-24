<?php require_once '../config/function.php';




if (!empty($_POST) && !empty($_GET)) {
    //var_dump($_POST);die;

    if (empty($_POST['title_media']) && empty($_FILES['media']['name'])) {
        $error = 'Ces champs sont obligatoire';
    }


    if (empty($_POST['name_media'])) {

        $error = 'Ces champs sont obligatoire';
    }

    if (!isset($error)) {

        if (!empty($_POST['name_media']) && isset($_POST['id_media_type']) && isset($_POST['id_page'])) {


            if (!empty($_FILES['media']['name'])) {
                $media = date_format(new DateTime(), 'Y-m-d-H-i-s') . $_POST['name_media'] . $_FILES['media']['name'];
                copy($_FILES['media']['tmp_name'], '../assets/upload/' . $media);

                //    var_dump($_POST);var_dump($media);die;
            } else {

                $media = $_POST['title_media'];
            }

            // var_dump($_POST['id_media_type']); die;

            execute("INSERT INTO media (title_media, name_media, id_page, id_media_type) VALUES (:title_media, :name_media, :id_page, :id_media_type)", array(
                ':title_media' => $media, //
                ':name_media' => $_POST['name_media'], //[name input ] renommer le fichier upload avec la methode ensuite requete insert into 
                ':id_page' => $_POST['id_page'],
                ':id_media_type' => $_POST['id_media_type']
            ));

            $_SESSION['messages']['success'][] = 'Média ajouté';
            header('location:./typeChoice.php');
            // exit();
        } else {

            execute("UPDATE media SET title_media=:title WHERE id_media=:id", array(
                ':id' => $_POST['id_media'],
                ':title' => $_POST['title_media']
            ));

            $_SESSION['messages']['success'][] = 'Média type modifié';
            header('location:./typeChoice.php');
            exit();
        }
    }
}

$all_medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);



if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $medias = execute("SELECT * FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
}

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = ' supprimé';
        header('location:./typeChoice.php');
        exit;
    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./typeChoice.php');
        exit;
    }
}



require_once '../inc/backheader.inc.php';
$medias = execute("SELECT* FROM media m INNER JOIN media_type mt ON m.id_media_type = mt.id_media_type
INNER JOIN page p ON m.id_page = p.id_page")
    ->fetchAll(PDO::FETCH_ASSOC);
// execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);
$pages = execute("SELECT * FROM `page`")->fetchAll(PDO::FETCH_ASSOC);
$types = execute("SELECT * FROM media_type")->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="../assets/js/media.js" />
<link rel="stylesheet" href="../assets/css/media.css" />
<h1 class="text-center">Archives Médias</h1>

<form action="" method="post" enctype="multipart/form-data" class="w-75 mx-auto mt-5 mb-5">
    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="media_type" class="form-label">Nom du type de média</label>

        <input name="name_media" id="name_media" placeholder="Nom du média" type="text" value="<?= $media['title_media_type'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>
    <div class="text-center ">
        <h3 class="text-center">Choisir la page</h3>
    </div>
    <div class=" row">
        <input type="hidden" name="id_media_type" value="<?= $_GET['id'] ?? ''; ?>">
        <select name="id_page">
            <option value="">-- Sélectionner une page --</option>
            <?php foreach ($pages as $page) : ?>
                <option class="text-center" value="<?= $page['id_page'] ?? ''; ?>"><?php echo $page['title_page'] ?? ''; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="medias_infos">
            <div class="visu_media fs-5 ">

                <div class="input-group row mb-3">
                    <?php if (isset($_GET['title']) && isset($_GET['id'])  && ($_GET['title']  == 'photo' || $_GET['title'] == 'audio' || $_GET['title'] == 'video')) {
                    ?>
                        <label class="form-label mt-3" for="id_media_type">Upload</label>
                        <input name="media" type="file" class="form-control" id="id_media_type">

                </div><?php  } else { ?>
                <div class="form-group ">
                    <label for="">Url du liens</label>
                    <input name="title_media" id="title_media" placeholder="Url du réseau social" type="text" value="<?= $mediaTitle['title_media_type'] ?? ''; ?>" class="form-control">
                </div>
            <?php  }   ?>
            <div class="input-group mb-3 mt-3">
            <a href="typeChoice.php" class="btn btn-outline-info text-center ml-1 w-175 ">Ajouter un Média</a>
            </div>
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary mt-2">Valider</button>
    </div>
</form>

<table class="table table-dark table-striped w-75 mx-auto">
    <thead class="text-center">
        <tr>
            <th>Titre</th>
            <th>Name</th>
            <th>Type</th>
            <th>Page</th>
            <th>Actions</th>
            <th>Appercus</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($medias as $media) : ?>
            <tr>
                <td><?= $media['title_media']; ?></td>
                <td><?= $media['name_media']; ?></td>
                <td><?= $media['title_media_type']; ?></td>
                <td><?= $media['title_page']; ?></td>
                <td class="text-center">
                    <a href="?id=<?= $media['id_media']; ?>&a=edit" class="btn btn-outline-info text-center">Modifier</a>
                    <a href="?id=<?= $media['id_media']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>
                </td>
                <td> <?php if ($media['title_media_type'] == 'audio' || 'video') : ?>
                        <a href="../assets/upload/<?= $media['title_media']; ?>" class="btn btn-outline-primary" target="_blank">Lire </a>
                    <?php elseif ($media['title_media_type'] == 'image') : ?>
                        <img src=" ../assets/upload/<?= $media['title_media']; ?>" alt="Miniature" class="thumbnail">
                </td><?php endif ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>





<?php require_once '../inc/backfooter.inc.php';     ?>