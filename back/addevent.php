<?php require_once '../config/function.php';

$media_type = execute("SELECT id_media_type as idmt FROM media_type WHERE title_media_type='photo'")->fetch(PDO::FETCH_ASSOC);
$media_type = $media_type['idmt'];
$page = execute("SELECT id_page FROM `page` WHERE title_page='event'")->fetch(PDO::FETCH_ASSOC);
$page = $page['id_page'];



if (!empty($_POST['name_event']) && !empty($_POST['content']) && !empty($_FILES['media']['name'])) {

    $media = date_format(new DateTime(), 'Y-m-d-H-i-s') . $_POST['name_event'] . $_FILES['media']['name'];

    if (copy($_FILES['media']['tmp_name'], '../assets/upload/' . $media)) {

        $lastIdevent = execute("INSERT INTO `event`(start_date_event, end_date_event) VALUE (:start_date_event, :end_date_event)", array(
            ':start_date_event' => $_POST['start_event_date'],
            ':end_date_event' => $_POST['end_event_date'],
        ), ',');


        if ($lastIdevent !== null) {
            $lastIdcontent = execute("INSERT INTO content (title_content,description_content, id_page) VALUE (:title_content, :description_content, :id_page)", array(
                ':title_content' => $_POST['name_event'],
                ':description_content' => $_POST['content'],
                ':id_page' => $page
            ), ',');


            if ($lastIdcontent !== null) {
                $lastIdmedia = execute("INSERT INTO media (title_media, name_media, id_page, id_media_type) VALUES (:title_media, :name_media, :id_page, :id_media_type)", array(
                    ':title_media' => $media, //
                    ':name_media' => $_POST['name_event'],
                    ':id_page' => $page,
                    ':id_media_type' => $media_type,
                ), ',');


                if ($lastIdmedia !== null) {
                    $success = execute("INSERT INTO event_media (id_media,id_event) VALUE (:id_media, :id_event)", array(
                        ':id_media' => $lastIdmedia,
                        ':id_event' => $lastIdevent,
                    ));


                    if ($success == true) {
                        execute("INSERT INTO event_content (id_content,id_event) VALUE (:id_content, :id_event)", array(
                            ':id_content' => $lastIdcontent,
                            ':id_event' => $lastIdevent,
                        ));
                        $_SESSION['messages']['success'] = 'Event ajouté';
                        header('location:./event.php');
                        exit();
                    }
                }
            }
        }
    }
}


require_once '../inc/backheader.inc.php';


?>


<h1 class="text-center">Ajouter un event :<h1>
        <section class="text_center w-120">
            <h2 class="text-info text-center fs-4">Modification du contenu de la page: <?= $edit['title_page'] ?? ''; ?></h2>
            <section>
                <form action="" method="post" enctype="multipart/form-data" class="w-75 mx-auto mt-5 mb-5">
                    <div>
                        <div class="form-group">
                            <small class="text-danger">*</small>
                            <label for="text" class="form-label">Nom de l'event</label>

                            <input name="name_event" id="name_event" placeholder="Nom de l'event" type="text" class="form-control">
                            <small class="text-danger"><?= $error ?? ''; ?></small>
                        </div>
                        <h3>Choisir une image</h3>
                        <div class=" wrap">

                            <div class="medias_infos col">
                                <div class="visu_content fs-5 ">

                                    <div class="input-group  mb-3">

                                        <label class="form-label mt-3" for="id_media_type">Upload</label>
                                        <input name="media" type="file" class="form-control" id="id_media_type">

                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <h3>Début<h3>
                                                    <input type="date" name="start_event_date" class=" rounded p-3 m-4">


                                                    <h3>Fin<h3>
                                                            <input type="date" name="end_event_date" class=" rounded p-3 m-4">
                                        </div>
                                        <textarea class=" h-10" id="content" name="content" rows="5" cols="33"><?= $edit['description_content'] ?? ''; ?><?php if (!isset($_GET['a'])  && !isset($_GET['id'])) {
                                                                                                                                                                execute("SELECT description_content FROM content");
                                                                                                                                                            } ?>
                                </textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Valider</button>
                        </div>
                </form>