<?php require_once 'config/function.php';
require_once 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/galerie.css" />

<!-- page d'accueil 1ère page -->
<div class="hautDePage ">
    <div id="carouselExample" data-bs-interval="false" data-bs-ride="carousel" class="carousel slide w-75 mx-auto">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="home mx-auto">
                    <div class="titre">
                        <div class="encadrement ">
                            <h1>Bienvenue à Star'Island</h1>
                            <div class="fs-3 mt-6 w-3">Mesdames et Messieurs, Bienvenue à l'embarquement. Préparez-vous pour une aventure épique dans ce jeu de rôle 18+.L'Envol imminent est offert. Alors, Bon voyage et que l'aventure commence !</div>
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
    <button class="carousel-control-prev mb-5 pb-5" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next mb-5 pb-5" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<div class="basDePage">
    <section id="commentaires">
        <div id="commentaires-liste" class="">
            <!-- Liste des commentaires -->
            <div class="commentaire text-center d-flex justify-content-evenly " width=500>
                <div class="d-flex justify-content-center align-items-center me-5  ">
                    <img class="img-fluid rounded-circle " src="./assets/images/avatar.png" alt="" width="50">
                </div>
                <div>
                    <p class="note">★★★★★</p>
                    <h2 class="contenu align-items-center" >Lorem ipsum dolor sit amet, consectetur.</h2>
                </div>
            </div>

            <div class="commentaire text-center justify-content-between mt-2 p-2" width=500>
                <p class="note"><img class="img2 rounded-circle " src="./assets/images/avatar.png" alt="" width=50>★★★★★
                </p>
                <div class="d-flex  flex-row">

                    <h2 class="contenu align-items-center">Lorem ipsum dolor sit amet, consectetur.</h2>
                </div>
            </div>
            <div class="commentaire text-center  ">
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
            </div>
           
            <!-- ... autres commentaires ... -->
        </div>

        <form class="w-50 mt-1 bg-light bg-opacity-10 p-2 mx-auto" id="commentaire-formulaire" class="formcom">
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
    </section>
</div>
</div>
<script src="assets/js/home.js"></script>

<?php  require_once "inc/footer.inc.php";  ?>