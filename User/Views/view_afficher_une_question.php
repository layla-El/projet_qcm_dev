<!-- MAIN -->
<!-- QUESTIONS -->

<!-- Affichage de la question actuelle -->

    <div id="chargingBar">
        <div id="chargingMove"></div>
    </div>

    <main id="mainQuestions">

    <div class="containerQuestions">
        <?php foreach ($libelle_question as $l) : ?>
            <h3><?= htmlentities($l->libelle_question) ?></h3>
        <?php endforeach; ?>

        <form action="?controller=question&action=afficher_une_question"onclick="return confirm('Veuillez selectionner une réponse.');" id="formChoix" method="POST">
            <?php foreach ($libelle_reponse as $reponse) : ?>
                <div class="choix">
                    <label>
                        <input type="radio" name="selected_reponse" value="<?= $reponse->type ?>">
                        <?= htmlentities($reponse->libelle_reponse) ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <div class="ButtonSubmitDiv">
                <button type="submit" name="next_question" class="btnSubmit">VALIDER</button>
            </div>
        </form>


    </main>
</div>

<script>
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

    </script>