<!-- MAIN -->
<!-- QUESTIONS -->

<!-- Affichage de la question actuelle -->

<div class="containerQuestions">

    <main id="mainQuestions">

        <?php foreach ($libelle_theme as $l) : ?>
            <h1><?= $l ?></h1>
        <?php endforeach; ?>
        <h3><?= htmlentities($currentQuestion->libelle_question) ?></h3>



        <form action="?controller=question&action=question&id_theme=<?= $id_theme ?>&niveau=<?= $niveau ?>&question=<?= $questionIndex + 1 ?>" id="formChoix">
            <?php $id_question = $currentQuestion->id_question; ?>
            <?php foreach ($reponses[$id_question] as $reponse) : ?>

                <div class="choix">
                    <!-- Récupération des réponses correspondantes à la question affichée -->
                    <p class="reponse"><?= htmlentities($reponse->libelle_reponse) ?></p>
                </div>

            <?php endforeach; ?>

            <div class="ButtonSubmitDiv">
                <button type="submit" class="btnSubmit">VALIDER</button>
            </div>

        </form>

    </main>
</div>



//! SCRIPT POUR PASSER A LA QUESTION SUIVANTE
<script>
    let formContainer = document.querySelector('#mainQuestions');

    // Ajout d'un écouteur d'événement "submit" au formulaire
    formContainer.addEventListener('submit', function(event) {

        // Empêcher le comportement par défaut du formulaire (rechargement de la page)
        event.preventDefault();

        // pour passer à la question suivante :

        // 1. Incrémenter l'indice de la question pour passer à la question suivante
        let questionIndex = <?= $questionIndex ?>;
        let nextQuestionIndex = questionIndex + 1;

        // 2. Redirection vers la nouvelle URL avec les paramètres mis à jour
        let redirectUrl = `?controller=question&action=question&id_theme=<?= $id_theme ?>&niveau=<?= $niveau ?>&question=${nextQuestionIndex}`;
        window.location.href = redirectUrl;
    });
</script>