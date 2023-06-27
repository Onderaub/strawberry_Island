const formulaire = document.getElementById('commentaire-formulaire');
const listeCommentaires = document.getElementById('commentaires-liste');

// Écouter l'événement de soumission du formulaire
formulaire.addEventListener('submit', (event) => {
  event.preventDefault(); // Empêcher le rechargement de la page

  const note = document.getElementById('note').value;
  const commentaire = document.getElementById('commentaire').value;

  // Créer un nouvel élément de commentaire
  const nouvelCommentaire = document.createElement('div');
  nouvelCommentaire.classList.add('commentaire');
  nouvelCommentaire.innerHTML = `
    <p class="note">${generateStarRating(note)}</p>
    <p class="contenu">${commentaire}</p>
  `;

  // Ajouter le nouvel élément de commentaire à la liste
  listeCommentaires.appendChild(nouvelCommentaire);

  // Réinitialiser le formulaire
  formulaire.reset();
});

// Générer la notation en étoiles
function generateStarRating(note) {
  const fullStar = '★';
  const emptyStar = '☆';
  const rating = parseInt(note);

  if (isNaN(rating) || rating < 1 || rating > 5) {
    return ''; // Note invalide, retourner une chaîne vide
  }

  const fullStars = fullStar.repeat(rating);
  const emptyStars = emptyStar.repeat(5 - rating);

  return fullStars + emptyStars;
}
var thumbnails = document.querySelectorAll('.thumbnail');
  thumbnails.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
      this.classList.toggle('expanded');
    });
  });