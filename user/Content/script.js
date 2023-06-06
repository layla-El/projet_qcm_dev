// Afficher les règles du jeu au clic du bouton About dans le Header

const about = document.querySelector('.buttonHeader');
const rules = document.querySelector('.rules');

about.addEventListener("click", function() {
    rules.classList.toggle('visible');
  });
  
  document.addEventListener("click", function(event) {
    if (!rules.contains(event.target) && event.target !== about) {
      rules.classList.remove('visible');
    }
  });


  // Formulaire questions
document.getElementById("formChoix").addEventListener("submit", function (event) {
    let selected = false; // Variable pour vérifier si une réponse a été sélectionnée
    let radios = document.getElementsByName("selected_reponse"); // Récupère tous les boutons radio avec le nom "selected_reponse"

    // Parcours tous les boutons radio
    for (let i = 0; i < radios.length; i++) {
        // Vérifie si le bouton radio actuel est sélectionné
        if (radios[i].checked) {
            selected = true; // Une réponse a été sélectionnée
            break; // Sort de la boucle car une réponse a été trouvée
        }
    }

    // Si aucune réponse n'a été sélectionnée
    if (!selected) {
        event.preventDefault(); // Empêche la soumission du formulaire
        alert("Veuillez sélectionner une réponse."); // Affiche une alerte pour demander à l'utilisateur de sélectionner une réponse
    }
});


// Récupérer les éléments HTML de la barre de progression
const progressBar = document.getElementById('chargingMove');
const progressBarContainer = document.getElementById('chargingBar');

// Définir la durée totale en millisecondes
const dureeTotale = 1200000;

// Définir le temps écoulé initial
let tempsEcoule = 0;

// Mettre à jour la barre de progression
function mettreAJourBarreProgression() {
    // Calculer le pourcentage de progression
    const pourcentage = (tempsEcoule / dureeTotale) * 100;

    // Mettre à jour la largeur de la barre de progression en fonction du pourcentage
    progressBar.style.width = pourcentage + '%';

    if (tempsEcoule >= dureeTotale - 300000) {
        // Modifier la couleur de la barre de progression en rouge
        progressBar.style.backgroundColor = 'red';
    }


    // Vérifier si le temps écoulé a atteint la durée totale
    if (tempsEcoule >= dureeTotale) {
        // Arrêter la progression
        clearInterval(timer);
        // Faire quelque chose lorsque le temps est écoulé (par exemple, afficher un message)
        document.getElementById('formChoix').submit();
    }
    // Augmenter le temps écoulé
    tempsEcoule += 500; // Exemple : augmenter de 1 seconde (1000 millisecondes)
}

// Mettre à jour la barre de progression toutes les secondes
const timer = setInterval(mettreAJourBarreProgression, 10); // Exemple : mettre à jour toutes les 1 seconde (1000 millisecondes)

