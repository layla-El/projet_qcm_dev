<!-- MAIN -->
<!-- QUESTIONS -->

 <!-- Affichage de la question actuelle -->

 <div class="container">
<div id="chargingBar"><div id="chargingMove"></div>
    <main id="mainQuestions">
        <?php foreach ($libelle_theme as $l) : ?>
        <h1><?= $l ?></h1>
        <?php endforeach; ?>
        <h3><?= htmlentities($currentQuestion->libelle_question) ?></h3>

 <!-- Formulaire pour passer à la question suivante -->
        <form action="?controller=question&action=question&id_theme=<?= $id_theme ?>&niveau=<?= $niveau ?>&question=<?= $questionIndex + 1 ?>"  id="formChoix">
        <?php $id_question = $currentQuestion->id_question; ?>
            <?php foreach ($reponses[$id_question] as $reponse) : ?>
            <div class="choix">
 <!-- Récupération des réponses correspondantes à la question affichée -->
            <p><?= htmlentities($reponse->libelle_reponse) ?></p>
            </div>
            <?php endforeach; ?>
            <div class="ButtonSubmitDiv">
                <button type="submit" class="btnSubmit">VALIDER</button>
            </div>

        </form>
    </main>
</div>

<script>
            document.addEventListener('DOMContentLoaded', function() {
            // Sélectionnez le formulaire par son ID
            var form = document.getElementById('formChoix');
            // Écoutez l'événement de soumission du formulaire
            form.addEventListener('submit', function(event) {
                event.preventDefault(); 
                // Empêche la soumission par défaut du formulaire
                // Récupérez les valeurs actuelles des paramètres d'URL
                let params = new URLSearchParams(window.location.search);
                let id_theme = params.get('id_theme');
                let niveau = params.get('niveau');
                let questionIndex = parseInt(params.get('question')) || 1;
                // Vérifiez si l'indice de question atteint 10
                if (questionIndex === 10) {
                    // Redirigez l'utilisateur vers la vue de score
                    window.location.href = 'chemin vers la vue de score';
                    return; // Arrêtez l'exécution du code restant
                }
                // Incrémentez l'indice de question
                questionIndex++;
                // Mettez à jour les paramètres de l'URL avec les nouvelles valeurs
                params.set('question', questionIndex.toString());
                // Construisez la nouvelle URL avec les paramètres mis à jour
                var newURL = window.location.pathname + '?' + params.toString();
                // Redirigez l'utilisateur vers la nouvelle URL
                window.location.href = newURL;
            });
        });
    </script>
