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
            <div class="choix">
 <!-- Récupération des réponses correspondantes à la question affichée -->
            <?php $id_question = $currentQuestion->id_question; ?>
            <?php foreach ($reponses[$id_question] as $reponse) : ?>
            <p><?= htmlentities($reponse->libelle_reponse) ?></p>
            </div>
            <?php endforeach; ?>
            <div class="ButtonSubmitDiv">
                <button type="submit" class="btnSubmit">VALIDER</button>
            </div>

        </form>


    </main>
</div>