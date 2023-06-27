 <?php require_once 'config/function.php';
    require_once 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="assets/css/galerie.css" />

<div id="carouselExample" class="carousel slide w-50 mx-auto">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/teasera.png" class="d-block w-100 mt-5" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/teaserb.png" class="d-block w-100 mt-5" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/teaserc.png" class="d-block w-100 mt-5" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

 <?php require_once 'inc/footer.inc.php';          ?>