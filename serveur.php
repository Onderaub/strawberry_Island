<?php require_once 'config/function.php';
require_once 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="assets/css/serveur.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<body>
  <section class="sectionServeur">
    <form class=" w-50 mx-auto mt-5 bg-light bg-opacity-12 p-5 formcom" id="commentaire-formulaire">
    <div class="Serveur"></div>  
    <h3 class="text-center">Top Server</h3>
        <div class="rating">
            <label class="form-label text-center" for="note">Note :</label>
            <i class="fa-solid fa-star" data-value="1"></i>
            <i class="fa-regular fa-star" data-value="2"></i>
            <i class="fa-regular fa-star" data-value="3"></i>
            <i class="fa-regular fa-star" data-value="4"></i>
            <i class="fa-regular fa-star" data-value="5"></i>
            <input type="hidden" id="note" name="note" required>
        </div>
        <div class="mathieu rounded">
            <label class="form-label" for="commentaire">Commentaire :</label>
            <textarea class="form-control" id="commentaire" name="commentaire" required></textarea>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Envoyer</button>
    </form>
  </section>
  <script>
    const etoiles = document.querySelectorAll('.rating i');
    const noteInput = document.getElementById('note');

    etoiles.forEach(etoile => {
      etoile.addEventListener('click', () => {
        const valeur = etoile.getAttribute('data-value');
        noteInput.value = valeur;

        // Mettre à jour l'apparence des étoiles
        etoiles.forEach(etoile => {
          const valeurEtoile = etoile.getAttribute('data-value');
          if (valeurEtoile <= valeur) {
            etoile.classList.remove('fa-regular');
            etoile.classList.add('fa-solid');
          } else {
            etoile.classList.remove('fa-solid');
            etoile.classList.add('fa-regular');
          }
        });
      });
    });
    </script>
<?php require_once 'inc/footer.inc.php';?>