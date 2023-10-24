<?php require_once 'config/function.php';


$error = false;
$nickname_comment = rand(1, 255);
$picture = execute("SELECT id_media FROM media ORDER BY RAND() LIMIT 1")->fetchColumn();
if (empty($_POST['commentaire'])) {

    $error = true;
    $_SESSION['messages']['error'] = 'Champs absent';
}
if (!$error) {

    if (!empty($_POST['commentaire']) && isset($_POST['note']) && $_POST['note'] > 0) {
        execute("INSERT INTO comment ( rating_comment, comment_text, publish_date_comment, nickname_comment, id_media) VALUES (:rating_comment, :comment_text, :publish_date_comment, :nickname_comment, :id_media)", array(
            ':rating_comment' => $_POST['note'],
            ':comment_text' => $_POST['commentaire'],
            ':publish_date_comment' => date_format(new DateTime(), 'Y-m-d-H-i-s'),
            ':nickname_comment' => $_POST['nickname_comment'],
            ':id_media' => $picture,


        ));

        var_dump($_POST);


        // $_SESSION['messages']['success'][] = 'Commentaire ajouté !';
        // header('location:./home.php');
        // exit();
    }
}

$commentaires = execute("SELECT * FROM comment c INNER JOIN media m ON c.id_media= m.id_media ORDER BY RAND() LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
$content = execute("SELECT c.*FROM content c INNER JOIN `page` p on c.id_page= p.id_page WHERE title_page='home'")->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($content);
// echo "</pre>";die;
require_once 'inc/header.inc.php'; 
?>


<link rel="stylesheet" href="assets/css/home.css" />
<!-- <link rel="stylesheet" href="assets/css/galerie.css" /> -->

<!-- page d'accueil 1ère page -->
<section>
    <div class="hautDePage ">
        <div id="carouselHome" data-bs-interval="false" data-bs-ride="carousel" class="carousel slide w-75 mx-auto">
            <div class="carousel-inner" id="carouselTextHome">
                <div class="carousel-item active">
                    <section class="home mx-auto mt-2">
                        <div class="titre">
                            <div class="encadrement">
                                <h1><?= $content['title_content'] ?? ''; ?></h1>
                                <div class="description fs-3 w-3"><?= $content['description_content'] ?? ''; ?></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item mt-5  ">
                    <div class="thumbnails mt-5 ">
                        <img src="assets/images/teaserc.png" width="300" alt="...">
                        <img src="assets/images/teaserd.png" width="300" alt="...">
                        <img src="assets/images/teasere.png" width="300" alt="...">
                    </div>
                </div>

                <div class="carousel-item mt-5 ">
                    <form class="w-50 mx-auto mt-5 bg-light bg-opacity-10 p-2" id="commentaire-formulaire" class="formcom">
                        <h3 class="text-center">Laissez un commentaire</h3>
                        <div class="rounded">
                            <label class="form-label" for="note">Note :</label>
                            <input class="form-control" type="number" id="note" name="note" min="1" max="5" required>
                        </div>
                        <div class="mathieu rounded">
                            <label class="form-label" for="commentaire">Commentaire :</label>
                            <textarea class="form-control" id="commentaire" name="commentaire" required></textarea>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <div class="basDePage">
        <section id="commentaires" class="mt-5">
            <div id="commentaires-liste" class="">
                <?php foreach ($commentaires as $commentaire) : ?>

                    <div class="commentaire text-center justify-content-between mt-2 p-2" width=500>
                        <p class="note"><img class="note border-black" src="../assets/upload/<?= $commentaire['title_media']; ?>" alt="" width=50>
                        <?= $commentaire['rating_comment']; ?>
                       
                    </p>
                        <div class="d-flex  flex-row">

                            <h2 class="contenu align-items-center"><?= $commentaire['comment_text'] ?? ''; ?></h2>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Liste des commentaires -->
                <!-- <div class="commentaire text-center d-flex justify-content-evenly mt-2 p-2 " width=500>
                    <div class="d-flex justify-content-center align-items-center me-5  ">
                        <img class="img-fluid rounded-circle " src="./assets/images/avatar.png" alt="" width="50">
                    </div>
                    <div>
                        <p class="note">★★★★★</p>
                        <h2 class="contenu align-items-center">Lorem ipsum dolor sit amet, consectetur.</h2>
                    </div>
                </div>

              
                <div class="commentaire text-center mt-2 p-2 ">
                    <p class="note border-black">★★★☆☆<img class="img2 rounded-circle mt-0" src="./assets/images/avatar2.png" alt="" width=50></p>
                    <div class="d-flex align-items-center flex-row-reverse">

                        <h2 class="contenu contenu text-center mx-auto">Sed do eiusmod tempor incididunt.</h2>
                    </div>
                </div>
                <div class="commentaire text-center">
                    <p class="note"><img class="img2 rounded-circle" src="./assets/images/avatar2.png" alt="" width=50>★★★★★</p>
                    <div class="d-flex align-items-center flex-row">

                        <h2 class="contenu contenu text-center mx-auto">Lorem ipsum dolor sit amet elit.</h2>
                    </div>
                </div> -->

                <!-- ... autres commentaires ... -->
                <!-- </div> -->

                <form method='post' class="w-50 mt-1 bg-light bg-opacity-10 p-2 mx-auto" id="commentaire-formulaire" class="formcom">
                    <h3 class="text-center">Laissez un commentaire</h3>
                    <div class="rounded">
                        <label class="form-label" for="note">Note :</label>
                        <input class="form-control" type="number" id="note" name="note" min="1" max="5" required>
                    </div>
                    <div class="mathieu rounded">
                        <label class="form-label" for="commentaire">Commentaire :</label>
                        <textarea class="form-control" id="commentaire" name="commentaire" required></textarea>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Envoyer</button>
                    <div>
                        <input type="hidden" name="nickname_comment" value=<?php echo $nickname_comment; ?>>
                    </div>
                </form>
        </section>
    </div>
</section>

<script src="assets/js/home.js"></script>

<?php require_once "inc/footer.inc.php";  ?>