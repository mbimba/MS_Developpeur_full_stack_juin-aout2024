// Sélectionner le formulaire
const form = document.getElementById('myForm');

// Ajouter un événement submit au formulaire
form.addEventListener('submit', (e) => {
  // Empêcher le comportement par défaut du formulaire (rechargement de la page)
  e.preventDefault();

  // Récupérer les données du formulaire
  const formData = new FormData(form);

  // Envoyer les données au serveur via une requête AJAX
  fetch('/add2_script.php', {
    method: 'POST',
    body: formData
  })
  .then((response) => response.text())
  .then((message) => {
    console.log(message);
    // Afficher un message de succès ou d'erreur
    document.getElementById('result').innerHTML = message;
  })
  .catch((error) => {
    console.error(error);
    // Afficher un message d'erreur
    document.getElementById('result').innerHTML = 'Erreur lors de l\'envoi du formulaire';
  });
});



/*     ------FONCTION BOUTON RETOUR  ------  */
 function redirectToAnother() {

   window.location.href = "index2.php";
  
  }
  