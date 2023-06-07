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
