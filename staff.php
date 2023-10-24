<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';
?>
<link rel="stylesheet" href="assets/css/staff.css" />
</head>


<h1 class="text-center">Equipe</h1>
<section class="navEquipe">
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
</section>
<?php require_once 'inc/footer.inc.php'; ?>