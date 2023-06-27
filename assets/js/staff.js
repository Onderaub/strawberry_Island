// Fonction pour gérer la soumission du formulaire
function ajouterBenevole(event) {
  event.preventDefault(); // Empêche l'envoi du formulaire

  // Obtenir les valeurs des champs du formulaire
  const nom = document.getElementById('nameInput').value;
  const photo = document.getElementById('photoInput').value;
  const reseau = document.getElementById('networkInput').value;

  // Créer un nouvel élément div
  const benevoleDiv = document.createElement('div');
  benevoleDiv.classList.add('benevole');

  // Créer l'élément image et définir l'URL de la photo
  const photoImg = document.createElement('img');
  photoImg.src = photo;

  // Créer un paragraphe pour le nom
  const nomPara = document.createElement('p');
  nomPara.textContent = nom;

  // Créer un paragraphe pour le réseau
  const reseauPara = document.createElement('p');
  reseauPara.textContent = reseau;

  // Ajouter l'image et les paragraphes à la div
  benevoleDiv.appendChild(photoImg);
  benevoleDiv.appendChild(nomPara);
  benevoleDiv.appendChild(reseauPara);

  // Ajouter la div au conteneur des bénévoles
  const benevoleContainer = document.getElementById('volunteerContainer');
  benevoleContainer.appendChild(benevoleDiv);

  // Réinitialiser le formulaire
  document.getElementById('volunteerForm').reset();
}

// Ajouter un écouteur d'événement à la soumission du formulaire
const formulaire = document.getElementById('volunteerForm');
formulaire.addEventListener('submit', ajouterBenevole);
