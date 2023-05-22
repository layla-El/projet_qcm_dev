<!-- MAIN -->
<!-- QUESTIONS -->

<!-- Affichage de la question actuelle -->

<div class="containerQuestions">

    <main id="mainQuestions">

        <?php foreach ($libelle_theme as $l) : ?>
            <h1><?= $l ?></h1>
        <?php endforeach; ?>
        <h3><?= htmlentities($currentQuestion->libelle_question) ?></h3>



        <form action="?controller=question&action=question&id_theme=<?= $id_theme ?>&niveau=<?= $niveau ?>&question=<?= $questionIndex + 1?>&type=<?= $type ?>" id="formChoix">
            <?php $id_question = $currentQuestion->id_question; ?>
            <?php foreach ($reponses[$id_question] as $reponse) : ?>

                <div class="choix">
                    <!-- Récupération des réponses correspondantes à la question affichée / custom atribute -->
                    <p class="reponse" data-id="<?= $reponse->id_reponse ?>" data-type="<?= $reponse->type ?>"><?= htmlentities($reponse->libelle_reponse) ?></p>
                </div>

            <?php endforeach; ?>

            <div class="ButtonSubmitDiv">
                <button type="submit" class="btnSubmit">VALIDER</button>
            </div>

        </form>

    </main>
</div>