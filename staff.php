<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';
?>
<link rel="stylesheet" href="assets/css/staff.css" />
</head>


<h1 class="text-center">Equipe</h1>
<section class="navEquipe">
  <!-- <nav class="navbar1 navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </div>
    </nav> -->
  <div class="border rounded-pill bg-white row w-50 mx-auto text-center ">
    <div class="team-category border-end col-2 border-4 p-3">Admin </div>
    <div class="team-category border-end col-2 border-4 p-3">Les Dev' </div>
    <div class="team-category border-end col-2 border-4 p-3">Mappers </div>
    <div class="team-category border-end col-2 border-4 p-3">Modérat </div>
    <div class="team-category border-end col-2 border-4 p-3">Art/Game Design </div>
    <div class="team-category col-2 p-3">Tous</div>
  </div>
  <div class="Equipe text-center mt-4 ">
    <form id="benevoles">
      <div class="dropdown-center">
        <img class="img2 rounded-circle mt-0" src="./assets/images/avatar2.png" alt="Jacques De Ski benevole 1" width=50 type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Réseau 1</a></li>
          <li><a class="dropdown-item" href="#">Réseau 2</a></li>
          <li><a class="dropdown-item" href="#">Réseau 3</a></li>
        </ul>
      </div>
    </form>
<!-- A mettre dans la partie admin <button type="submit">Ajouter le bénévole</button> -->
</div>

<?php require_once 'inc/footer.inc.php'; ?>