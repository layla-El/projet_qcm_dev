<!-- MAIN -->
<!-- QUESTIONS -->

<!-- Affichage de la question actuelle -->

<div class="containerQuestions">
    <div id="chargingBar">
        <div id="chargingMove"></div>
    </div>
    <main id="mainQuestions">


        <?php foreach ($libelle_question as $l) : ?>
            <h3><?= htmlentities($l->libelle_question) ?></h3>
        <?php endforeach; ?>

        <form action="?controller=question&action=afficher_une_question" id="formChoix" method="POST">
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